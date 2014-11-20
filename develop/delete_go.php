<?php
	include ('db_Cando.inc.php');

	
//file is new - needs to be tested 

		$sqlDelete = "DELETE FROM Mieter WHERE Mieter_ID=$_POST[Mieter_ID]";

		//$sqlUpdate = "UPDATE Mieter SET Vorname = '$_POST[feld1]'  WHERE Mieter_ID = $_POST[Mieter_ID] ";
		$result = $conn->query($sqlDelete);
		if($result === FALSE) {
   			die(mysql_error()); // TODO: better error handling
		}
		else {
			echo "deletion of ".$_POST[feld1]. " done";
		}
?>