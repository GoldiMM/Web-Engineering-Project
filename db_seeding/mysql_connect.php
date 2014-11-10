<?php

$db_host = "localhost";
$db_username = "Cando";
$db_pass = "yes123";
$db_name = "Hausverwaltung";

@mysql_connect("$db_host", "$db_username", "$db_pass") or die ("could not connect to mySql");
@mysql_select_db("$db_name") or die ("No database under this name");

echo "Successful Connection : ) ";

?>

