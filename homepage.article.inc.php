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
        Ausgangspunkt der Webseite. <br/>
        <br/>
        <b> Mieter </b> <br/>
        (kurze Erklarung)
        <br/>
        <br/>
        <b> Wohnungen </b> <br/>
        (kurze Erklarung) <br/>
        <br/>
        <b> Vertr&auml;ge </b> <br/>
        (kurze Erklarung) </br>
        <br/>
        <b> Rechnungen </b> <br/>
        (kurze Erklarung) <br/>
        <br/>
        <b> Benutzer </b> <br/>
        Unter dem Me&uuml;punkt Benutzer gibt es eine &Uuml;bersicht der aktuellen Benutzer,
        die das Online-Verwaltungstool verwenden. Neue Benutzer k&ouml;nnen erfasst oder
        bereits bestehene Benutzer k&ouml;nen gel&ouml;scht werden. Zudem kann das eingene Passwort
        ge&auml;ndert werden oder man kann sich das eigene Passwort an eine gew&uuml;nschte E-Mail-Adresse
        zusenden. <br/>
    </p>
</article>
";
}
?>
