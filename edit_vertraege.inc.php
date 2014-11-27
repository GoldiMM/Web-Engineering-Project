<?php
	// Create connection and query
	include ('db_Cando.inc.php');
	//include('authorization.inc.php');

	//________________________enter the required Table in the variable $tablename: 
	$tablename 		= 'Mietvertraege';
	$edit_link		= 'vertrag_edit.php';
	$delete_link	= 'vertrag_delete.php';

	include ('edit_delete_table.inc.php');	
?>

