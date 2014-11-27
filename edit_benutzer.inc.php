<?php
	// Create connection and query
	include ('db_Cando.inc.php');
	//include('authorization.inc.php');

	//________________________enter the required Table in the variable $tablename: 
	$tablename 		= 'Benutzer';
	$edit_link		= 'benutzer_edit.php';
	$delete_link	= 'benutzer_delete.php';

	include ('edit_delete_table.inc.php');	
?>

