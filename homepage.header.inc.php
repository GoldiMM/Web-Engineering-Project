<?php
//sofern der Benutzer eingeloggt ist
    if ($_SESSION['eingeloggt'] == true) {
    ?>
        <header>
            <p> Sie sind eingeloggt als <b> <?php echo "$_SESSION[benutzername]" ?></b> </br>
                <a href='logout.php'> Logout here </a>
            </p>
        <img class="picture2" src="house2.jpg" > 
                    <header/>

    <?php
    } //end of if
    
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
