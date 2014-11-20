<?php
	include ('db_Cando.inc.php');

//file is new - needs to be tested 

	
	// get value of id that sent from address bar
	$id=$_GET['id'];
	$tablename = 'Mieter';
	$primaryKey = 'Mieter_ID';
	$sql = "SELECT * FROM $tablename WHERE $primaryKey = '$id'";  
	$result = $conn->query($sql);
	if($result === FALSE) {
   		die(mysql_error());
	}

	$row = $result->fetch_assoc();
	$fields = mysqli_fetch_fields($result);
	$headers = array();

	echo "<article>";
		echo "<table border=\"1\">";
		echo '<form action="delete_dynamic_go.php" method="POST">';
		/* Tabellenkopf dynamisch ausgeben */
				//$fields = mysqli_fetch_fields($result);
				//$headers = array();
				foreach ($fields as $field) {
					$headers[] = $field->name;
					echo "<th>". $field->name . "</th>\n";
				}
				echo "</tr>\n";

		/* Reihen dynamisch ausgeben */
		if ($result->num_rows > 0) {
		 		echo "<tr>";
		 			for ($i=0; $i<sizeof($headers); $i++){
			        	echo  "<td>". $row["$headers[$i]"]."</td>";
			        }					
				echo "</tr>";      
		} 
			else {
				    echo "0 results";
			}


		/* Formularabschluss */
		echo "<tr>";
?>
		<td>
			<input name="id" type="hidden" id="id" value="<?php echo $row["$headers[0]"];?> " >
		</td>
<?php 
		echo "<td>";
				echo '<input type="submit" name="submit" value="Datensatz entfernen">';			
			echo "</td>";
		echo "</tr>";
	echo "</form>";
	echo "</table>" ;
	echo "</article>";
?>