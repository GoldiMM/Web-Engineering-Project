<?php

//Datenbankverbindung aufbauen
include "db.inc.php";

$link = mysql_connect("localhost", $benutzer, $passwordDB) or die("Verbindung zur Datenbank fehlgeschlagen!");
mysql_select_db($dbname) or die("Datenbank nicht gefunden!");

//Benutzer Tabellenausgabe
$abfrage = "SELECT Benutzer_ID, Benutzername FROM benutzer";
$ergebnis = mysql_query($abfrage) or die(mysql_error());


echo "
  
<article align=\"left\"> 

<p> Hier eine &Uuml;bersicht aller Benutzer, die das Online-Verwaltungstool 
f&uuml;r das Mehrfamilienhaus nutzen:  </p>
<br/>
<table border=\"1\">";

/* Tabellenkopf dynamisch ausgeben */
$anz_spalten = mysql_num_fields($ergebnis);
echo "<tr>";
for ($i = 0; $i < $anz_spalten; $i++) {
    echo "<th>" . mysql_field_name($ergebnis, $i) . "</th>\n";
}
echo "</tr>\n";

/* Datenstätze in Tabelle ausgeben */
while ($zeile = mysql_fetch_array($ergebnis, MYSQL_ASSOC)) {
    echo "<tr>";
    while (list($schluessel, $wert) = each($zeile)) {
        echo "<td>" . $wert . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo " <br/> <br/> <br/> <br/></article>";
mysql_close();
?>

