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

	$alternativCon=mysqli_connect($db_host,$db_username,$db_pass, $db_name);
	// Check connection
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	/*
	$db_host = "mysql.hostinger.de";
	$db_username = "u947198430_user";
	$db_pass = "yes123";
        $dbname = "u947198430_db";

	// Create connection
	$conn = new mysqli($db_host, $db_username, $db_pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	*/

?>
