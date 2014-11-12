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

<p> Welchen Benutzer wollen Sie l&ouml;schen?  </p>
<br/>
<form action=\"homepage_f_del.php\" method=\"POST\">
<table border=\"1\">";
/* Tabellenkopf dynamisch ausgeben */
$anz_spalten = mysql_num_fields($ergebnis);
echo "<tr>";
for ($i = 0; $i < $anz_spalten; $i++) {
    echo "<th>" . mysql_field_name($ergebnis, $i) . "</th>\n";
}
echo "<th >L&ouml;schen </th>\n";
echo "</tr>\n";

/* Datenstätze in Tabelle ausgeben */

while ($zeile = mysql_fetch_array($ergebnis, MYSQL_ASSOC)) {
    echo "<tr>";
    // 
          while (list( $value) = each($zeile)) {
            
          foreach ($zeile as $key => $value) {
                if ($key == 'Benutzername') {   // Benutzername wird in $bname gespeichert
                    $bname = $value;
                }
                echo "<td>" . $value . "</td>";
            }
          
          }
    echo "<td> <input type=\"submit\" value=\"$bname loeschen\" name=\"$bname\"> </td>";
    echo "</tr>";
}
echo "</table> </form>";
echo " <br/> <br/> <br/> <br/></article>";


if (isset($_POST['$bname'])) {
    echo "button gedrueckt";
}



mysql_close();
?>
