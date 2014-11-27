<?php
	//__generic query__
	include ('db_Cando.inc.php');
	$sql = "SELECT * FROM $tablename"; 
	$result = $conn->query($sql);

	//__display__
		echo "<h2>".$pagename."</h2>";
			echo "<table border=\"1\" cellspacing=\"0pt\" cellpadding=\"0 pt\" >";

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
					    echo "0 results";
				}
			echo"<br>";
			echo "</table>";
		echo "</br>";
?>