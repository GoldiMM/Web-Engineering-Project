<?php
	// Create connection and query
	include ('db_Cando.inc.php');
	//include('authorization.inc.php');

	//________________________enter the required Table in the variable $tablename: 
	$tablename 		= 'Wohnungen';
	$edit_link		= 'wohnung_edit.php';
	$delete_link	= 'wohnung_delete.php';

	include ('edit_delete_table.inc.php');	
?>

