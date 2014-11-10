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

//Feeding the Database

$sql = "INSERT INTO Mietvertraege (Miete)
		VALUES ('500');";


//.......... unfinished.
		




if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>


//pure comments //

$sql = "INSERT INTO Mietvertraege (Miete, Bezahlte_Miete, Mieter_ID, Wohnungs_ID)
		VALUES ('50', '0', '01/01/2014', '3', '4');";


