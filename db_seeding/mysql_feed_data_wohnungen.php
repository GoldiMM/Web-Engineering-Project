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

$sql = "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('1.Stock', 'Golstrasse 77', '4000', 'Basel', '20', '1');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('1.Stock', 'Golstrasse 77', '4000', 'Basel', '40', '2');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('1.Stock', 'Golstrasse 77', '4000', 'Basel', '60', '3');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('1.Stock', 'Golstrasse 77', '4000', 'Basel', '80', '4');";

$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('2.Stock', 'Golstrasse 77', '4000', 'Basel', '20', '1');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('2.Stock', 'Golstrasse 77', '4000', 'Basel', '40', '2');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('2.Stock', 'Golstrasse 77', '4000', 'Basel', '60', '3');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('2.Stock', 'Golstrasse 77', '4000', 'Basel', '80', '4');";
		
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('3.Stock', 'Golstrasse 77', '4000', 'Basel', '20', '1');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('3.Stock', 'Golstrasse 77', '4000', 'Basel', '40', '2');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('3.Stock', 'Golstrasse 77', '4000', 'Basel', '60', '3');";
$sql .= "INSERT INTO Wohnungen (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
		VALUES ('3.Stock', 'Golstrasse 77', '4000', 'Basel', '80', '4');";



if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
