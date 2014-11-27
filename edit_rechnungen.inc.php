<?php
	// Create connection and query
	include ('db_Cando.inc.php');
	//include('authorization.inc.php');

	//________________________enter the required Table in the variable $tablename: 
	$tablename 		= 'Rechnungen';
	$edit_link		= 'rechnung_edit.php';
	$delete_link	= 'rechnung_delete.php';

	include ('edit_delete_table.inc.php');	
?>

