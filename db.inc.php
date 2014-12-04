<?php
/*
$benutzer = "u947198430_user";   
$passwordDB = "yes123";   
$dbname = "u947198430_db";

*/
$benutzer = "Cando";
$passwort = "yes123";
$dbname = "Hausverwaltung";
$host = "localhost";
//$host = "mysql.hostinger.de";


mysql_connect($host, "$benutzer", "$passwort");
mysql_select_db($dbname);

//Abfrage
$benutzernameabfrage = "SELECT benutzername FROM benutzer";
$ergebnis = mysql_query($benutzernameabfrage);
while($row=mysql_fetch_object($ergebnis)) {
    echo "$row->benutzername";
}


?>

