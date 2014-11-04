<?php

//sofern der Benutzer eingeloggt ist
if ($_SESSION['eingeloggt'] == true) {
echo "
<article>
    <p align=\"left\"> 
        Hallo <b> $_SESSION[benutzername] </b> <br/> 
        Herzlich Willkommen auf Deinem eigenen Online-Verwaltungstool f&uuml;r Mehrfamilienh&auml;user. <br/>
        <br/>
        Bitte bediene das Navigationsmen&uuml;, um Deine Vermieter und Liegenschaften zu verwalten<br/>
        Hier eine kleine Auflistung der wichtigsten Men&uuml;punkte:
        <br/> 
        <br/>
        <b> Home </b> <br/>
        Ausgangspunkt der Webseite.
        <br/>
        <br/>
        <b> Menupunkt2 </b> <br/>
        (kurze Erklarung) <br/>
        <br/>
        usw.
    </p>
</article>
";

}

?>
