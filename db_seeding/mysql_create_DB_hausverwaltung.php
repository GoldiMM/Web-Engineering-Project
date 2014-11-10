<?php


$db_host = "localhost";
$db_username = "Cando";
$db_pass = "yes123";

$link = mysql_connect("$db_host", "$db_username", "$db_pass");
		if (!$link) {
		    die('Could not connect: ' . mysql_error());
		}

	$sql = 'CREATE DATABASE IF NOT EXISTS Hausverwaltung';
		if (mysql_query($sql, $link)) {
		    echo "Database Hausverwaltung created successfully\n";
		} else {
		    echo 'Error creating database: ' . mysql_error() . "\n";
		}
?>
