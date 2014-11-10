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

//Feeding the Database

$sql = "INSERT INTO Mieter (Vorname, Nachname, Anrede)
VALUES ('Tom', 'Watson', 'Herr');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
VALUES ('Harold', 'Liberal', 'Herr');";
$sql .= "INSERT INTO Mieter (Vorname, Nachname, Anrede)
VALUES ('Claire', 'Ki', 'Frau');";



if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>