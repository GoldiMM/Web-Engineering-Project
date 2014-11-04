<?php
//sofern der Benutzer eingeloggt ist
    if ($_SESSION['eingeloggt'] == true) {
            echo "
                <form action=\"index.php\" method=\"POST\">
                    <header>
                        <p> Sie sind eingeloggt als <b> $_SESSION[benutzername] </b> 
                            <input type=\"submit\" value=\"Logout\">
                        </p>
                            <img class=\"picture2\" src=\"house2.jpg\" > 
                    <header/>
                </form>
                 ";
            }
//sofern der Benutzer nicht eingeloggt ist
    if ($_SESSION['eingeloggt'] == false) {
            echo "
                <header>
                    <p align=\"left\"> Benutzername oder Passwort falsch! Sie sind nicht eingeloggt!
                    <a href=\"index.php\"> <font color=\"yellow\"> <b> Zur&uuml;ck zur Loggin-Seite </b> </font> </a>
                    </p>
                </header>
                 ";
    }
