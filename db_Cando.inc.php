<?php
	$db_host = "mysql.hostinger.de";
	$db_username = "u947198430_user";
	$db_pass = "yes123";
        $dbname = "u947198430_db";

	// Create connection
	$conn = new mysqli($db_host, $db_username, $db_pass);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>
