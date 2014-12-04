	<?php
		include ('db_Cando.inc.php');

					// _________________________Feedback Resultat Ausgabe ___________________
			echo ("<h3>Aktuelle Wohnungsliste </h3> <br>");

			$sql = "SELECT Wohnungs_ID, Stockwerk, Zimmer FROM Wohnungen ORDER BY Wohnungs_ID ";
			$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo 	"Wohnungs_ID " 		. $row["Wohnungs_ID"].
						        " Stock  : "			. $row["Stockwerk"]. 
						        " Anzahl Zimmer   "			. $row["Zimmer"]. "<br>";
					}
				} 
				else {
					    echo "0 results";
				}


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
					    echo "Keine Daten vorhanden";
				}
	?>