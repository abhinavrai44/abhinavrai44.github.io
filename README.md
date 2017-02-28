# Kayako Task
--------------

This repository contains the solution to the task provided by Kayako Team.

# Directory Contents
---------------------

background.jpg - Image used as background in HTML page.

index.php - Basic UI is implemented to take user's inputs and then perform the query.

style.css - CSS style-sheet.

twitter.php - Display the Tweets.

TwitterAPIExchange.php - Class File of Twitter API.

var.php - Variables are checked for initialization.

class.php - Contains the Tweets Class where the required queries are made and the data collected.

# Twitter API Keys and Access Tokens
-------------------------------------

Can be obtained by registering on http://dev.twitter.com/. Without registeration API cannot be used.

# Making a request to retrieve Tweets
--------------------------------------

A detailed description is provided in the Twitter API Documentation - https://dev.twitter.com/rest/reference/get/search/tweets, for retrieval of tweets using the API.

The query should be of the format Example Request as described in the page.

However only a maximum of 100 tweets can be returned per page (default value being 15). Therefore if more than 100 tweets need to be retrieved, Paging needs to be performed. To perform Paging the id of the last tweet need to be retrieved and passed to max_id variable. Then again requests need to be made iteratively to retrieve the remaining tweets.

# Rate Limits
-------------
Twitter divides Rate Limits into windows of 15 minute intervals as discussed in the documentation - https://dev.twitter.com/rest/public/rate-limiting.

If we are receiving no results after pressing submit its because rate limits have been exceeded. Also incresing the number of tweets to search, results in not only large processing time but also exhausts the rate limit.