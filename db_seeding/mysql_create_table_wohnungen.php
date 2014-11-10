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



$sql = "CREATE TABLE IF NOT EXISTS Wohnungen (
	Wohnungs_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Stockwerk INT(4) NOT NULL,
	Adresse VARCHAR(30) NOT NULL,
	Postleitzahl INT (4),
	Ort VARCHAR(30),
	Quadratmeter INT(4),
	Zimmer INT (4)
)";


if ($conn->query($sql) === TRUE) {
    echo " table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>  