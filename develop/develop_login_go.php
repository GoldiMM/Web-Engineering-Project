<?php
	session_start();

    	$benutzername = $_POST['Benutzername'];
        $password = $_POST['Passwort'];

         if (isset($_POST['Benutzername']) AND isset($_POST['Passwort'])) {

            //$password = md5($password);   
            // $_SESSION['eingeloggt'] = false;

            //Datenbankverbindung aufbauen
            include "db.inc.php";

            $link = mysql_connect("localhost", $benutzer, $passwordDB) or die("Verbindung zur Datenbank fehlgeschlagen!");
            mysql_select_db($dbname) or die("Datenbank nicht gefunden!");

            //prüfen ob es nickname und password gibt
            $sql = "SELECT Benutzername FROM Benutzer WHERE Benutzername='$benutzername' AND Passwort='$password'";
            $result = mysql_query($sql) or die("Benutzername oder Passwort stimmt nicht!");



            if ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                //$benutzernameAusDB = $zeile['Benutzername'];
                $_SESSION['Benutzername'] =  $benutzername;
                //$_SESSION['eingeloggt'] = true;
                echo "Login OK";
                echo "<a href='develop_member.php'> go to member page </a>";
            }
            else {
            	echo "Login failed";
            }
        }
?>

