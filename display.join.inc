<?php
	//__generic query__
	include ('db_Cando.inc.php');
	//$sql = "SELECT * FROM $tablename"; 
	//$result = $conn->query($sql);

	//__display__
			echo '<table width="60% border="2" cellspacing="0.5pt" cellpadding="0.5 pt" class="t">';

				/* Headers - dynamisch ausgeben */
				$fields = mysqli_fetch_fields($result);
				$headers = array();
				foreach ($fields as $field) {
					$headers[] = $field->name;
					echo "<th>". $field->name . "</th>\n";
				}
				echo "</tr>\n";
				/* Row - dynamisch ausgeben */
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
					    echo "Keine Daten vorhanden";
				}
			echo "</table>";
		echo "</br>";
?>