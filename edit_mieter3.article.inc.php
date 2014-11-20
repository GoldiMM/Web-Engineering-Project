<?php
	include ('db_Cando.inc.php');
	// File Name form: edit_mieter.article.inc.php
		$tablename = 'Mieter';
		$primaryKey = 'Mieter_ID';
		$sqlUpdate = "UPDATE $tablename SET Anrede =  	'$_POST[feld1]' ,
									   Vorname =	'$_POST[feld2]' ,
									   Nachname =	'$_POST[feld3]' ,
									   Email =		'$_POST[feld4]' ,
									   Telefon =	'$_POST[feld5]'

		WHERE $primaryKey = $_POST[feld0] ";
		$result = $conn->query($sqlUpdate);
		if($result === FALSE) {
   			die(mysql_error()); 
		}
		else {
			echo "dynamic update done of the following data"; 
		echo "$_POST[feld0]";
		echo "$_POST[feld1]";
		echo "$_POST[feld2]";
		echo "$_POST[feld3]";		
		echo "$_POST[feld4]";
		echo "$_POST[feld5]"; 
		}
?>