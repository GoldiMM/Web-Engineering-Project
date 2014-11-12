<?php

//UPDATE `hausverwaltung`.`mieter` SET `Vorname` = 'Peter', `Nachname` = 'Muff' WHERE `mieter`.`Mieter_ID` = 1;
//UPDATE `hausverwaltung`.`mieter` SET `Vorname` = 'Sandra', `Nachname` = 'Kometer' WHERE `mieter`.`Mieter_ID` = 2;

		include ('db_Cando.inc.php');
		$sql="SELECT * FROM Mieter";
		$result = $conn->query($sql);
		if($result === FALSE) {
   			die(mysql_error()); // TODO: better error handling
		}
?>

		<table width="400" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<td>
					<table width="400" border="1" cellspacing="0" cellpadding="3">
						<tr>
							<td colspan="4"><strong>List data from mysql </strong> </td>
						</tr>
						<tr>
							<td align="center"><strong>ID</strong></td>
							<td align="center"><strong>Vorname</strong></td>
							<td align="center"><strong>Nachname</strong></td>
							<td align="center"><strong></strong></td>
						</tr>

						<?php
							while($row = $result->fetch_assoc()) {
								?>
								<tr>
									<td><?php echo $row["Mieter_ID"]; ?></td>
									<td><?php echo $row["Vorname"]; ?></td>
									<td><?php echo $row["Nachname"]; ?></td>
									<td align="center"><a href="update.php?id=<?php echo $row["Mieter_ID"]; ?>">Change</a></td>
								</tr>
								<?php
							}
							?>

					</table>
				</td>
			</tr>
		</table>