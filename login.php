<?php 
	$servername = "sql12.freedatabase.com";
	$username = "sql12337266";
	$password = "YM4rQBWbzF";
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>