<?php
	class Tweets
	{
		// Tweet Posted
		public $tweet;
		// NUmber of Retweets
		public $retweets;
		// Link of the tweet
		public $link;
		// Twitter ID of the user
		public $userName;
		// Link to the Profile Picture
		public $imgLink;
		// Number of tweets that have at least 1 retweet
		public $pos;

		// Constructor
		public function __construct()
		{
			$this->tweet = array();
		
			$this->retweets = array();
		
			$this->link = array();
		
			$this->userName = array();
		
			$this->imgLink = array();
		
			$this->pos = 0;
		}

		// Function to parse over Tweets and store the result
		public function getTweets($tag, $tweets_count, $search_type)
		{
			$url = 'https://api.twitter.com/1.1/search/tweets.json';

			// Twitter API Keys and Access Tokens
			$settings = array(
			    'oauth_access_token' => "",
			    'oauth_access_token_secret' => "",
			    'consumer_key' => "",
			    'consumer_secret' => ""
			);

			// Query to be made using the API
			if($tweets_count < 100)
				$getfield = '?q=#'.$tag.'&count='.$tweets_count.'&result_type='.$search_type;
			else
				$getfield = '?q=#'.$tag.'&count=100'.'&result_type='.$search_type;
			
			$tweets_count -= 100;

			while(1)
			{
				// Make the query and receive response as JSON
				$requestMethod = 'GET';
				$twitter = new TwitterAPIExchange($settings);
				$response = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();

				// Convet JSON to easily iterable string
				$string = json_decode($response, true);

				// Iterate over the tweets
				foreach ($string['statuses'] as $key => $value) 
					{
						// Check if tweet has at least 1 retweet
						if($value['retweet_count'] > 0)
						{
							// If yes, Append
							$this->userName[$this->pos] = $value['user']['name'];
							$this->imgLink[$this->pos] = $value['user']['profile_background_image_url'];
							$this->tweet[$this->pos] = $value['text'];
							$this->retweets[$this->pos] = $value['retweet_count'];
							$this->link[$this->pos] = "https://twitter.com/".$value['user']['id']."/status/".$value['id'];
							$this->pos++;
						}
					}

				// If more tweets need to be examined loop over else break
				if($tweets_count<1)
					break;
				// Get the id of the last tweet
				$max_id = $value['id'];
				// Only search those tweets that were made after the last tweet
				if($tweets_count < 100)
					$getfield = '?q=#'.$tag.'&count='.$tweets_count.'&result_type='.$search_type.'&max_id='.$max_id;
				else
					$getfield = '?q=#'.$tag.'&count=100'.'&result_type='.$search_type.'&max_id='.$max_id;

				$tweets_count -= 100;
			}

		}
	}

?>
