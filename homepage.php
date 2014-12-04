<?php
// vorhandene Session aufnehmen
session_start();
?>
    <html>
        <head> 
            <title> Online-Verwaltungstool </title> 
            <link rel="stylesheet" href="mycss.css" type="text/css">  
        </head>

        <body>
            <?PHP
                if (isset($_POST['nickname']) AND isset($_POST['password'])) {
                    // variante ohne DB Abfrage
                    $_SESSION['benutzername'] = $_POST['nickname'];
                    $_SESSION['eingeloggt'] = true;                                                
                    }
                     // END of variante ohne DB Abfrage

                /*
                    // Variablen setzen
                    $benutzername = $_POST['nickname'];
                    $password = $_POST['password'];
                    //$password = md5($password);   

                    //FIXME Zeile ist für Server auskommentiert 
                    $_SESSION['eingeloggt'] = true;

                    //Datenbankverbindung aufbauen
                    include ('db.inc.php');

                    $link = mysql_connect($host, $benutzer, $passwordDB) or die("Verbindung zur Datenbank fehlgeschlagen!");
                    mysql_select_db($dbname) or die("Datenbank nicht gefunden!");

                    //prüfen ob es nickname und password gibt
                    $abfrage = "SELECT Benutzername FROM Benutzer WHERE Benutzername='$benutzername' AND Passwort='$password'";
                    $ergebnis = mysql_query($abfrage) or die("Benutzername oder Passwort stimmt nicht!");

                    while ($zeile = mysql_fetch_array($ergebnis, MYSQL_ASSOC)) {
                        //$benutzernameAusDB = $zeile['Benutzername'];
                        $_SESSION['benutzername'] = $zeile['Benutzername'];
                        $_SESSION['eingeloggt'] = true;                                                
                    }
                }
                */
                
                include('homepage.header.inc.php');    
                include('homepage.nav.inc.php');
            ?>
            <aside> &nbsp; </aside>        
            <?php
                include('homepage.article.inc.php');
                include('homepage.footer.inc.php');
                include('authorization.inc.php');
                /*
                //Zugriffs-Begrenzung: 
                if(!isset($_SESSION['benutzername'])){ //if login in session is not set redirect to 404 page
                    header("Location: http://localhost/Web-Engineering-Project/unauthorized.php");
                }*/
            ?>        
    </body>
</html>