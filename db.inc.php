<?php
$benutzer = "root";
$passwort = "mysql";
$dbname = "hausverwaltung";

mysql_connect("localhost", "$benutzer", "$passwort");
mysql_select_db($dbname);

//Abfrage
$benutzernameabfrage = "SELECT benutzername FROM benutzer";
$ergebnis = mysql_query($benutzernameabfrage);
while($row=mysql_fetch_object($ergebnis)) {
    echo "$row->benutzername";
}
?>

