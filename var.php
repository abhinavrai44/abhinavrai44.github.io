<?php
	if(isset($_POST['type_search']))
		$type_search = $_POST['type_search'];
	else
		$type_search = 'recent';

	
	$hashTag = "custserv";
	
	if(isset($_POST['tweets_number']))
	{
		if(!empty($_POST['tweets_number']))
			$tweets_number = $_POST['tweets_number'];
		else
			$tweets_number = 50;
	}
	else
		$tweets_number = 50;
?>