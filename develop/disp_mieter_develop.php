<?php
	include ('db_Cando.inc.php');
	// Create connection

	echo "<article>";

	echo "<table>";



		// _________________________Feedback Resultat Ausgabe ___________________
			echo ("<h3>Aktuelle Mieterliste </h3> <br>");

			$sql = "SELECT Mieter_ID, Anrede, Vorname, Nachname FROM Mieter ORDER BY Mieter_ID DESC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			 	while($row = $result->fetch_assoc()) {
			 		echo "<tr>";
				        echo  "<td>". $row["Mieter_ID"]."</td>";
						echo  "<td>". $row["Anrede"]. 	"</td>";
						echo  "<td>". $row["Vorname"]. 	"</td>";
						echo  "<td>". $row["Nachname"].	"</td>";
					echo "</tr>";      
					}
				} 
				else {
					    echo "0 results";
				}

echo "</table>";
echo "end of feedback Resultat \n";


echo "<table border=\"1\">";
	/* Tabellenkopf dynamisch ausgeben */
			$fields = mysqli_fetch_fields($result);
			$headers = array();
			foreach ($fields as $field) {
				$headers[] = $field->name;
				echo "<th>" .  $field->name . "</th>\n";
			}
		echo "</tr>\n";

		//$sql = "SELECT Mieter_ID, Anrede, Vorname, Nachname FROM Mieter ORDER BY Mieter_ID DESC";
		$result = $conn->query($sql);
		$fields = mysqli_fetch_fields($result);
		$headers = array();
		foreach ($fields as $field) {
			$headers[] = $field->name; 
		}

				if ($result->num_rows > 0) {
			 	while($row = $result->fetch_assoc()) {
			 		echo "<tr>";
			 			for ($i=0; $i<sizeof($headers); $i++){
				        	echo  "<td>". $row["$headers[$i]"]."</td>";
				        }					
					echo "</tr>";      
					}
				} 
				else {
					    echo "0 results";
				}

echo "</table>";

		//$stringHeaders = array();
		//$stringHeaders = implode ( $headers);
		/*
		for ($i=0; $i<sizeof($headers); $i++){
			$currentColName = array_shift($headers);
			if ($result->num_rows > 0) {
			 	while($row = $result->fetch_assoc()) {
			 		echo "<tr>";
				        echo  "<td>". $row["$currentColName"]."</td>";
					echo "</tr>";      
					}
				}
		*/		


	/* Datensätze der Header Speichern  funkt nicht
		$fields = mysqli_fetch_fields($result);
		$headers = array();
		if ($result->num_rows > 0) {
			echo "<tr>";
			while($row = $result->fetch_assoc()) {
   				echo "<td>"."Mieter ".$row["Mieter_ID"]."</td>";
    		}
    		echo "</tr>";
}
*/
/* original copy from marcos code: 
while ($zeile = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>";
    while (list($schluessel, $wert) = each($zeile)) {
        echo "<td>" . $wert . "</td>";
    }
    echo "</tr>";
}
*/

	/* Datenstätze in Tabelle ausgeben 

		while ($row = $result->fetch_assoc()) {
		$rows = array();
		foreach ($row as $entry){
			rows[] = $entry->name;
	    	echo "<tr>";
	    		echo"<td>" . $entry->name . "</td>\n";
	    	echo "</tr>";
		}
	}
	*/

	echo "</article>";
	?>