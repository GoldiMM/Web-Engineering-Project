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


//show inserted Data
$sql = "SELECT Mieter_ID, Vorname, Nachname FROM Mieter";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo 
	        "id: " . $row["Mieter_ID"].
	        " - Name: ". $row["Vorname"]. 
	        " " . $row["Nachname"]. "<br>";
	    	}
		} 
		else {
		    echo "Keine Daten vorhanden";
		}

$conn->close();
?>  