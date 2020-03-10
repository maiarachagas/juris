<?php

	$servername = "localhost";
	$username 	= "maiara";
	$password 	= "inocoop";
	$dbname 		= "maiara";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>