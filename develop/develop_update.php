<?php
//UPDATE `hausverwaltung`.`mieter` SET `Vorname` = 'Peter', `Nachname` = 'Muff' WHERE `mieter`.`Mieter_ID` = 1;
	include ('db_Cando.inc.php');
	
	$sqlUpdate = "UPDATE Mieter SET Vorname = 'Boo'  WHERE Mieter_ID = 5 ";




	$result = $conn->query($sqlUpdate);
	if($result === FALSE) {
   	die(mysql_error()); // TODO: better error handling
	}

?>
