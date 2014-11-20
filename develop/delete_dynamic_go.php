<?php
	include ('db_Cando.inc.php');


//file is new - needs to be tested 
	
	// File Name form: delete_mieter.article.inc.php
		$tablename = 'Mieter';
		$primaryKey = 'Mieter_ID';
		//___________________________________________________
		$sqlDelete = "DELETE FROM $tablename WHERE $primaryKey = $_POST[feld0]";
		$result = $conn->query($sqlDelete);
		if($result === FALSE) {
   			die(mysql_error()); 
		}
		else {
			echo "deletion of ".$_POST[feld1]. " done";
		}
?>