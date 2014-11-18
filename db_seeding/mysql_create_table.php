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


$sql = "CREATE TABLE IF NOT EXISTS Wohnungen (
	Wohnungs_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Stockwerk INT(4) NOT NULL,
	Adresse VARCHAR(30) NOT NULL,
	Postleitzahl INT (4),
	Ort VARCHAR(30),
	Quadratmeter INT(4),
	Zimmer INT (4)
)";

$sql = "CREATE TABLE IF NOT EXISTS Mietvertraege (
	Vertrags_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Miete INT(4) NOT NULL,
	Bezahlte_Miete INT(8),
	Mietbeginn DATE,
	Mietende DATE,
	Mieter_ID INT(4),
	Wohnungs_ID INT(4)
)";

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Benutzer (
	Benutzer_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Passwort VARCHAR(30) NOT NULL,
	Benutzername VARCHAR(30) NOT NULL
)";
//funny, only the last table listed gets created.. who knows why?

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Rechnungen (
	Rechnungs_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Kategorie ENUM('Reparaturen','Öl','Wasser','Strom','Hauswart','','')
	Betrag DOUBLE (30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo " table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>  