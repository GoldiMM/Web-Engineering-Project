<?php
/*
$db_host = "localhost";
$db_username = "Cando";
$db_pass = "yes123";
$db_name = "Hausverwaltung";

*/

	$db_host = "mysql.hostinger.de";
	$db_username = "u947198430_user";
	$db_pass = "yes123";
    $db_name = "u947198430_db";

	// Create connection
	$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}



// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Rechnungen (
	Rechnungs_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Rechnungsdatum DATE,
	Kategorie ENUM('Reparaturen','Oel','Wasser','Strom','Hauswart','Heizkosten','',''),
	Betrag FLOAT,
	Lieferant  VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo " table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>  