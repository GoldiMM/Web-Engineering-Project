<?php

	//__variables__
	$pagename = 'Neue Wohnung';
	$tablename = 'Wohnungen';

	//__generic query__
	include ('db_Cando.inc.php');

	//__variable SQL statment__
	$sql = "INSERT INTO $tablename (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
			VALUES ('$_POST[feld1]','$_POST[feld2]','$_POST[feld3]','$_POST[feld4]','$_POST[feld5]','$_POST[feld6]')";

	//__generic db connection__
	$result = $conn->query($sql);
	if($result === FALSE) { die(mysql_error()); }
	else { echo "dynamic update done"; }





	//__generic query__	
	$sqlSelect = "SELECT * FROM $tablename"; 
	$result = $conn->query($sqlSelect);

	//__display__
	echo "<table border=\"1\">";
		/* Headers - dynamisch ausgeben */
				$fields = mysqli_fetch_fields($result);
				$headers = array();
				foreach ($fields as $field) {
					$headers[] = $field->name;
					echo "<th>". $field->name . "</th>\n";
				}
				echo "</tr>\n";

		/* Rows - dynamisch ausgeben */
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
		echo "</br>";	
	echo "</table>";
?>