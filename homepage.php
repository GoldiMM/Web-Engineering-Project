<!-- PHP -->
<?php
// vorhandene Session aufnehmen
session_start();
?>
<!-- PHP -->

<!-- HTML -->
<html>
    <head> 
        <title> Online-Verwaltungstool </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
    </head>

    <body>
        <!-- PHP -->
        <?PHP
        if (isset($_POST['nickname']) AND isset($_POST['password'])) {

            // Variablen setzen
            $benutzername = $_POST['nickname'];
            $password = $_POST['password'];
            //$password = md5($password);   
            $_SESSION['eingeloggt'] = false;

            //Datenbankverbindung aufbauen
            include "db.inc.php";

            $link = mysql_connect("localhost", $benutzer, $passwordDB) or die("Verbindung zur Datenbank fehlgeschlagen!");
            mysql_select_db($dbname) or die("Datenbank nicht gefunden!");

            //prüfen ob es nickname und password gibt
            $abfrage = "SELECT Benutzername FROM benutzer WHERE Benutzername='$benutzername' AND Passwort='$password'";
            $ergebnis = mysql_query($abfrage) or die("Benutzername oder Passwort stimmt nicht!");

            while ($zeile = mysql_fetch_array($ergebnis, MYSQL_ASSOC)) {
                //$benutzernameAusDB = $zeile['Benutzername'];
                $_SESSION['benutzername'] = $zeile['Benutzername'];
                $_SESSION['eingeloggt'] = true;
            }
        }
        ?>
        
        <?php
        include('homepage.header.inc.php');    
        ?>
        
        <?php
        include('homepage.nav.inc.php');
        ?>
        
        <aside> &nbsp; </aside>
                    
        <?php
        include('homepage.article.inc.php');
        ?>


        <?php
        include('homepage.footer.inc.php');
        ?>
             
    </body>
    
</html>