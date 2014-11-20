<?php
	include ('db_Cando.inc.php');

	// get value of id that sent from address bar
	$id=$_GET['id'];
	$tablename = 'Rechnungen';
	$primaryKey = 'Rechnungs_ID';
	//$sql = "SELECT * FROM $tablename";  	
	//$sql = "SELECT * FROM Mieter WHERE Mieter_ID= 3";
	$sql = "SELECT * FROM $tablename WHERE $primaryKey = '$id'";  

	//$sql="SELECT * FROM $tablename WHERE $primaryKey='$id'";
	//$result = $conn->query($sql);
	$result = $conn->query($sql);
	if($result === FALSE) {
   		die(mysql_error()); // TODO: better error handling
	}

	//$rows=mysql_fetch_array($result);
	$row = $result->fetch_assoc();
	$fields = mysqli_fetch_fields($result);
				$headers = array();
	echo "<article>";
		echo "<table border=\"1\">";
		echo '<form action="edit_rechnung3.article.inc.php" method="POST">';
		/* Tabellenkopf dynamisch ausgeben */
				//$fields = mysqli_fetch_fields($result);
				//$headers = array();
				foreach ($fields as $field) {
					$headers[] = $field->name;
					echo "<th>". $field->name . "</th>\n";
				}
				echo "</tr>\n";


		/* Eingabefelder  dynamisch ausgeben  */
		if ($result->num_rows > 0) {
		 		echo "<tr>";
		 			for ($i=0; $i<sizeof($headers); $i++){ 
		 				?>
			        	<td> 
							<input name="feld<?php echo $i;?>" type="text" id="Vorname" value= "<?php echo $row["$headers[$i]"]; ?> " size="20">
						</td>
					<?php
			        } // end of for					
		}//end of if 
		
		/* Formularabschluss */
		echo "<tr>";
			echo "<td>";
				echo '<input type="submit" name="Submit" value="Submit">';			
			echo "</td>";
		echo "</tr>";
	echo "</form>";
	echo "</table>" ;
	echo "</article>";
?>