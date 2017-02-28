<?php
	// Include Tweets Class
	include("class.php");	
	
	// Check variables for initialization
	include("var.php"); 

	// Twitter API to make the required query calls.
	include ("TwitterAPIExchange.php");
	
	$obj = new Tweets();
	$obj->getTweets($hashTag, $tweets_number, $type_search);
?>

<!-- HTML Page -->
<!DOCTYPE html>
<html>

	<head>

		<title>Kayako</title>

		<!-- Add Bootstrap Files -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</head>

	<body class="contact-page">

		<!-- Construct Table to display tweets -->
		<table class="table table-striped">
			<!-- Table Head -->
			<thead class="thead-inverse">
				<tr>
					<th>S.No</th>
					<th>Picture</th>
					<th>Name</th>
					<th>Tweet</th>
					<th>Number of Retweets</th>
				</tr>
			</thead>

			<!-- Print the tweets iteratively -->
			<tbody>
				<?php
				for ($i = 0; $i < $obj->pos; $i++)
				{
				?>

				<tr>
					<th scope="row"><?php echo $i+1?></th> 
					<th><img src="<?php echo $obj->imgLink[$i]; ?>" width = '150' height = '150'/></th> 
					<th><?php echo $obj->userName[$i];?> </th> 
					<!-- Make Tweet Clickable and add Tweet Link to ref -->
					<th><a href="<?php echo $obj->link[$i]; ?>" target="_blank"> <?php echo $obj->tweet[$i]; ?> </a></th> 
					<th> <?php echo $obj->retweets[$i]; ?> </th> 
				</tr>
				
				<?php
				}
				?>
			</tbody>

		</table>

	</body>
</html>