<?php
	// Create connection and query
	include ('db_Cando.inc.php');

	//________________________enter the required Table in the variable $tablename: 
	$tablename 		= 'Benutzer';
	$delete_link	= 'benutzer_delete.php';
	
	include ('db_Cando.inc.php');

	$sql = "SELECT * FROM $tablename";  
	$result = $conn->query($sql);
		echo "<table border=\"1\">";
		/* Tabellenkopf dynamisch ausgeben */
				$fields = mysqli_fetch_fields($result);
				$headers = array();
				foreach ($fields as $field) {
					$headers[] = $field->name;
					echo "<th>". $field->name . "</th>\n";
				}
				echo "</tr>\n";

		/* Reihen dynamisch ausgeben mit Edit und Delete Knopf*/
		if ($result->num_rows > 0) {
		 	while($row = $result->fetch_assoc()) {
		 		echo "<tr>";
		 			for ($i=0; $i<sizeof($headers); $i++){
			        	echo  "<td>". $row["$headers[$i]"]."</td>";
			        }
			    ?>			 
			    <td><a href="<?php echo $delete_link?>?id=<?php echo $row[$headers[0]]; ?>"> entfernen </a></td>	
			    			    	
			    <?php	
				echo "</tr>";      
				}
			} 
			else {
				    echo "Keine Daten vorhanden";
			}
		echo "</table>";
?>

