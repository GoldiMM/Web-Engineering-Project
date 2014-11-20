<?php
	include ('db_Cando.inc.php');
		// this file is not working properly yet.

		// update data in mysql database
		//echo "$_POST[Mieter_ID]";
		//echo "so far so good";

		//$sqlUpdate = "UPDATE Mieter SET Vorname = 'Boo'  WHERE Mieter_ID = 5 ";
		$sqlUpdate = "UPDATE Mieter SET Vorname = '$_POST[feld1]'  WHERE Mieter_ID = $_POST[Mieter_ID] ";
		$result = $conn->query($sqlUpdate);
		if($result === FALSE) {
   			die(mysql_error()); // TODO: better error handling
		}
		else {
			echo "data update done";
		}
		//$result=mysql_query($sql);
?>