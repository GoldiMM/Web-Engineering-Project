<?php

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

//Feeding the Database

$sql = "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Tom', 'Watson', 'Herr');";	
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Harold', 'Liberal', 'Herr');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Claire', 'Ki', 'Frau');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Dave', 'Strutton', 'Herr');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Mikko', 'Niya', 'Frau');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Naoaki', 'Yamashita', 'Herr');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Jessica', 'Guard', 'Frau');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Myriam', 'Espin', 'Frau');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Jose Luis', 'Alvarez', 'Herr');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Shinobu', 'Abe', 'Frau');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('Sarada', 'Conaway', 'Frau');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
		VALUES ('John', 'Breukelen', 'Frau');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>