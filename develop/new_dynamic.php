<?php
	// connect to db 
	include ('db_Cando.inc.php');
	//_____Variable_______//
	$tablename = 'Mieter';
	//_____Default statement //
	$sql = "SELECT * FROM $tablename";  
	$result = $conn->query($sql);

		echo "<article>";
			echo "<table border=\"1\">";
				echo '<form action="new_dynamic_go.php" method="POST">';

					/* Tabellenkopf dynamisch ausgeben */
					$fields = mysqli_fetch_fields($result);
					$headers = array();
					foreach ($fields as $field) {
						$headers[] = $field->name;
						echo "<th>". $field->name . "</th>\n";
					}
					echo "</tr>\n";

		 			/* Eingabefelder dynamisch erstellen */
					echo "<tr>";
			 			for ($i=0; $i<sizeof($headers); $i++){ 
			 				?>
				        	<td> 
								<input name="feld<?php echo $i;?>" type="text"  value= "" size="20">
							</td>
						<?php
				        } // end of for

					/* Formularabschluss */
					echo "<tr>";
						echo "<td>";
							echo '<input type="submit" name="submit" value="Daten erfassen">';			
						echo "</td>";
					echo "</tr>";
				echo "</form>";
			echo "</table>";
		echo "</article>";
?>