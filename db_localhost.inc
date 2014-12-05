<?php
	$db_host = "localhost";
	$db_username = "Cando";
	$db_pass = "yes123";
	$db_name = "hausverwaltung";

	// Create connection
	$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
?>
