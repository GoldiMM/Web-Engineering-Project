<?php
	// Create connection and query
	include ('db_Cando.inc.php');
	//________________________enter the requred Table in the variable $tablename: 
	$tablename = 'Wohnungen';
	$sql = "SELECT * FROM $tablename";  
	$result = $conn->query($sql);

	echo "<article>";
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
			    <td><a href="edit_wohnung2.article.inc.php?id=<?php echo $row[$headers[0]]; ?>"> edit (dynamically) </a></td>	
			    <td><a href="delete_dynamic.php?id=<?php echo $row[$headers[0]]; ?>"> Delete (dynamically)</a></td>	
			    	
			    <?php	
				echo "</tr>";      
				}
			} 
			else {
				    echo "0 results";
			}

		echo "</table>";
	echo "</article>";
?>