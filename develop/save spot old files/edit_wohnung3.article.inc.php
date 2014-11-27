<?php
	include ('db_Cando.inc.php');
		$tablename = 'Wohnungen';
		$primaryKey = 'Wohnungs_ID';
		$sqlUpdate = "UPDATE $tablename SET  Stockwerk =  	'$_POST[feld1]' ,
									   		Adresse =		'$_POST[feld2]' ,
									   		Postleitzahl =	'$_POST[feld3]' ,
									   		Ort =			'$_POST[feld4]' ,
									   		Quadratmeter =	'$_POST[feld5]' ,
									   		Zimmer =		'$_POST[feld6]'


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

