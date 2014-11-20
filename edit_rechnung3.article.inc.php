<?php
	include ('db_Cando.inc.php');
	// File Name form: edit_mieter.article.inc.php
		$tablename = 'Rechnungen';
		$primaryKey = 'Rechnungs_ID';

		$sqlUpdate = "UPDATE $tablename SET Rechnungsdatum = 	'$_POST[feld1]' ,
									   		Kategorie 	=		'$_POST[feld2]' ,
									   		Betrag 		=		'$_POST[feld3]' 
									   		

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
		}
?>