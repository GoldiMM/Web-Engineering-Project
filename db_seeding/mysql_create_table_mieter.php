<?php

$db_host = "localhost";
$db_username = "Cando";
$db_pass = "yes123";
$db_name = "Hausverwaltung";

// Create connection
$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Mieter (
	Mieter_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Vorname VARCHAR(30) NOT NULL,
	Nachname VARCHAR(30) NOT NULL,
	Anrede ENUM('Frau','Herr','','')
)";



if ($conn->query($sql) === TRUE) {
    echo " table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>  