<?php 
	// Check variables for initialization
	include("var.php"); 
?>

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

	<body class="home-page">
		<form name="form" id="form" action="twitter.php" method="post">
		
			<!-- HashTag for which tweets are searched. Remove readonly to enable edit -->
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">#</span>
			  <input class="form-control" readonly="readonly" placeholder="<?php echo $hashTag;?>" aria-describedby="basic-addon1">
			</div>
		
			<br>
			
			<!-- The number of tweets that will be searched -->
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Number of Tweets to Search</span>
			  <!-- The number of tweets that will be searched can have a maximum value of 1000 -->
			  <input type="number" name="tweets_number" min="1" max="1000" class="form-control" placeholder="<?php echo $tweets_number;?>" aria-describedby="basic-addon1">
			</div>
			
			<br>
			
			<!-- Specify the type of seach that will be performed -->
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Result Type</span>
				<select class="form-control" name="type_search">
					<option value="mixed">Mixed</option>
					<option value="recent">Recent</option>
					<option value="popular">Popular</option>
				</select> 
			</div>
			
			<br>

			<!-- Submit -->
			<input type="submit" class="btn-default" value="Submit">
			
	 	</form>
	</body>
</html>
