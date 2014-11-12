<?php
	include ('db_Cando.inc.php');
	// Create connection

	echo "<article>";
	
		// _________________________Feedback Resultat Ausgabe ___________________
			echo ("<h3>Aktuelle Mieterliste </h3> <br>");

			$sql = "SELECT Mieter_ID, Anrede, Vorname, Nachname FROM Mieter ORDER BY Mieter_ID DESC";
			$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo 	"Mieter " 		. $row["Mieter_ID"].
						        "   : "			. $row["Anrede"]. 
						        "     "			. $row["Vorname"]. 
						        "    " 			. $row["Nachname"]. "<br>";
					}
				} 
				else {
					    echo "0 results";
				}

	echo "</article>";
	?>