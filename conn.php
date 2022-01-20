<?php
	$conn = mysqli_connect('localhost', 'root', '', 'valorant_agents') or die(mysqli_error());
 
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>