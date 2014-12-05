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

// Create connection
$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS Mietvertraege (
	Vertrags_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Miete INT(4) NOT NULL,
	Bezahlte_Miete INT(8),
	Mietbeginn DATE,
	Mietende DATE,
	Mieter_ID INT(4),
	Wohnungs_ID INT(4)
)";


if ($conn->query($sql) === TRUE) {
    echo " table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>  