<?php

$db_host = "mysql:host=mysql.hostinger.de";
$db_username = "u947198430_user";
$db_pass = "yes123";
$dbname = "u947198430_db";

@mysql_connect("$db_host", "$db_username", "$db_pass") or die ("could not connect to mySql");
@mysql_select_db("$db_name") or die ("No database under this name");

echo "Successful Connection : ) ";

?>

