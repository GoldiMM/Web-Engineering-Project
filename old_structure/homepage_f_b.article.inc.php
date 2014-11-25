<?php

echo "
  
<article align=\"left\"> 

<p> Einen weiteren Benutzer f&uuml;r das Online-Verwaltungstool erfassen:  </p>
<br/>
<form name=\"form1\" action=\"homepage_f_new.php\" method=\"POST\">
    <table>
        <tr>
            <td> Benutzername: </td> 
            <td> <input type=\"text\" name=\"benutzername\" size=\"16\"> </td>
        </tr>
        <tr>
            <td> Passwort: </td>
            <td> <input type=\"password\" name=\"passwort\" size=\"8\">  </td>
        </tr>
        <tr>
            <td> Passwort (Kontrolle): &nbsp;   &nbsp;   </td>
            <td> <input type=\"password\" name=\"passwort2\" size=\"8\" </td>
        </tr>
        <tr>
            <td>&nbsp;  </td>
            <td> <input type=\"submit\" value=\"erfassen\">  <input type=\"reset\" value=\"nochmals\"</td>
        </tr>
    </table>
</form>
        ";

if (!empty($_POST['benutzername']) AND ! empty($_POST['passwort']) AND ! empty($_POST['passwort2'])) {

    //Variablen auslesen
    $benutzername = $_POST['benutzername'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];

    //Datenbankverbindung aufbauen
    include "db.inc.php";

    //Kontrollieren ob Benutzername bereits in der Datenbank vorhanden ist
    $link = mysql_connect("localhost", $benutzer, $passwordDB) or die("Verbindung zur Datenbank fehlgeschlagen!");
    mysql_select_db($dbname) or die("Datenbank nicht gefunden!");
    $abfrage = "SELECT Benutzername FROM benutzer WHERE Benutzername='$benutzername' ";
    $ergebnis = mysql_query($abfrage) or die(mysql_error());
    $row = mysql_num_rows($ergebnis);

    if ($row == 1) {
        echo "<p> <font color=\"red\"> ACHTUNG der Benutzername <b>";
        echo $benutzername;
        echo "</b> wird bereits verwedent! <br/>
                                       Bitte verwenden Sie einen anderen Benutzername. </font> </p>
                ";
    }

    //Passwoerter kontrollieren
    else if ($passwort != $passwort2) {
        echo "<p> <font color=\"red\"> ACHTUNG Passw&ouml;rter stimmen nicht &uuml;berein! </font> </p>";
    }

    //Sofern Passwoerter ueberein stimmen und Benutzername noch nicht in der DB vorhanden ist
    else if (($passwort == $passwort2) && ($row == 0)) {

        //Benutzer in Tabelle einfuegen
        $insert = "INSERT INTO benutzer (Benutzername, Passwort) VALUES ('$benutzername', '$passwort')";
        $db = mysql_query("$insert") or die(mysql_error("Datenbankeintrag neuer Benutzer hat nicht geklappt!"));

        echo " <p>  <font color=\"green\" > <br/> Neuer Benutzer <b>";
        echo $benutzername;
        echo "</b> wurde erfasst </font></p>";

        mysql_close();
    }
} else {

    echo "<p> Bitte die entsprechenden Felder ausf&uuml;llen </p> ";
}
?>