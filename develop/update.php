<?php
		include ('db_Cando.inc.php');

		// get value of id that sent from address bar
		$id=$_GET['id'];
		$sql="SELECT * FROM Mieter WHERE Mieter_ID='$id'";

		$result = $conn->query($sql);
		if($result === FALSE) {
   			die(mysql_error()); // TODO: better error handling
		}

		//$rows=mysql_fetch_array($result);
		$row = $result->fetch_assoc();
?>
	<table width="400" border="0" cellspacing="1" cellpadding="0">
		<tr> 						
			<form action="update_go.php" method="POST">
				<td> 				
					<table width="100%" border="0" cellspacing="1" cellpadding="0">
						<tr>
							<td>&nbsp;</td>
							<td colspan="3">	<strong>Mieterdaten anpassen</strong> </td>
						</tr>
						<tr>
							<td align="center">&nbsp;</td>
							<td align="center">&nbsp;</td>
							<td align="center">&nbsp;</td>
							<td align="center">&nbsp;</td>
						</tr>
						<tr>
							<td align="center">&nbsp;</td>
							<td align="center"><strong>Vorname</strong></td>
							<td align="center"><strong>Nachname</strong></td>
							<td align="center"><strong>Mieter ID</strong></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td align="center">
								<input name="feld1" type="text" id="Vorname" value="<?php  echo  $row["Vorname"];?>">
							</td>
							<td align="center">
								<input name="feld2" type="text" id="Nachname" value="<?php echo $row["Nachname"]; ?>" size="15">
							</td>
							<td>
								<input name="Mieter_ID" type="text" id="Mieter_ID" value="<?php echo $row["Mieter_ID"]; ?>" size="15" readonly>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input name="id" type="hidden" id="id" value="<php? echo $row["Mieter_ID"]; ?>
							</td>
							<td align="center">
								<input type="submit" name="Submit" value="Submit">
							</td>
							<td>&nbsp;</td>
						</tr>
					</table>
				</td>
			</form>
		</tr>
	</table>