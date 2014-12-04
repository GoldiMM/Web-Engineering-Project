<?php  // ____INCLUDE FILE __
	include('authorization.inc.php');
	

	$sql = "SELECT * FROM $tablename WHERE $primaryKey = '$id'";  
	$result = $conn->query($sql);
	if($result === FALSE) {
   		die(mysql_error());
	}
	$row = $result->fetch_assoc();
	$fields = mysqli_fetch_fields($result);
	$headers = array();
	?>

	<!-- display data to be deleted  -->
	<table border="1">
		<form  action="<?php echo $form_action?>" method="POST">
			<?php
			/* Tabellenkopf dynamisch ausgeben */		
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
							<input name="feld<?php echo $i;?>" type="text" value= "<?php echo $row["$headers[$i]"]; ?> " size="20" >
						</td>
			<?php
			        } // end of for					
			}//end of if Eingabefelder 
			?>
			<!--  Formularabschluss -->
			<tr> 			
				<td>
					<input name="id" type="hidden" id="id" value="<?php echo $row["$headers[0]"];?> " >
				</td>
			</tr>
		
			<td>
				<input type="submit" name="submit" value="Datensatz endg&uuml;ltig entfernen" style="color:red; font-weight: bold; ">	
				<input type="button" value="zur&uuml;ck zur Liste " onclick="load('ajax_article', '<?php echo $cancel_link?>');"> 			
			</td>
			</tr>
		</form>
	</table>

