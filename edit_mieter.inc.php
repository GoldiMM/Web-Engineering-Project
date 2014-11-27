<?php
	// Create connection and query
	include ('db_Cando.inc.php');
	//include('authorization.inc.php');

	//________________________enter the required Table in the variable $tablename: 
	$tablename 		= 'Mieter';
	$edit_link		= 'mieter_edit.php';
	$delete_link	= 'mieter_delete.php';

	include ('edit_delete_table.inc.php');	
?>

