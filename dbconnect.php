<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'OnlineFood';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if($conn===false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	else{
		
	}
?>