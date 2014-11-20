<?php
	// connect to db
	include ('db_Cando.inc.php');
	//_____Variable SQL Statement_____//
	$tablename = 'Mieter';
	$sql = "INSERT INTO $tablename (Anrede, Vorname, Nachname, Email, Telefon)
			VALUES ('$_POST[feld1]','$_POST[feld2]','$_POST[feld3]', '$_POST[feld4]','$_POST[feld5]')";

	/* Processing of DB entry */
	$result = $conn->query($sql);
	if($result === FALSE) {
   			die(mysql_error());
		}
	else {  echo "dynamic update done"; }

	/* Dynamic output of results */
	$sqlSelect = "SELECT * FROM $tablename";  // Option : ORDER BY Mieter_ID DESC";
	$result = $conn->query($sqlSelect);

	echo "<table border=\"1\">";
		/* Tabellenkopf dynamisch ausgeben */
				$fields = mysqli_fetch_fields($result);
				$headers = array();
				foreach ($fields as $field) {
					$headers[] = $field->name;
					echo "<th>". $field->name . "</th>\n";
				}
				echo "</tr>\n";
		/* Reihen dynamisch ausgeben */
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
?>