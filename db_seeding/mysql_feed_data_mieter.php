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

$sql = "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Tom', 'Watson', 'Herr', 'tom@world.com', '044 555 55 55');";	
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Harold', 'Liberal', 'Herr', 'harold@world.com', '044 666 66 66');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Claire', 'Ki', 'Frau', 'Claire@world.com', '044 444 44 44');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Dave', 'Strutton', 'Herr', 'Dave@world.com', '044 222 22 22');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Mikko', 'Niya', 'Frau', 'Mikko@world.com', '044 111 11 11');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Naoaki', 'Yamashita', 'Herr', 'Naoaki@world.com', '044 333 11 11');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Jessica', 'Guard', 'Frau', 'Jessica@world.com', '044 555 11 11');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Myriam', 'Espin', 'Frau', 'Myriam@world.com', '044 777 11 11');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Jose Luis', 'Alvarez', 'Herr','Jose@world.com', '044 888 11 11');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Shinobu', 'Abe', 'Frau','Shinobu@world.com', '044 335 11 11');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('Sarada', 'Conaway', 'Frau','Sarada@world.com', '044 889 11 11');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede, Email, Telefon)
		VALUES ('John', 'Breukelen', 'Frau','John@world.com', '044 441 11 11');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>