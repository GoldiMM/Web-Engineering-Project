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
        Unter dem Men&uuml;punkt Mieter hat es eine aktuelle Mieterliste mit den wichtigsten Informationen &uuml;ber die
        Mieter, welche sich auch als PDF ausgeben lassen. Neue Mieter k&ouml;nnen erfasst werden oder bestehende Mieter 
        k&ouml;nnen bearbeitet oder gel&ouml;scht werden. Ausserdem wird ein Mieterspiegel gef&uuml;hrt.
        <br/>
        <br/>
        <b> Wohnungen </b> <br/>
        Unter dem Men&uuml;punkt Wohnungen hat es eine Wohnungsliste mit den aktuellen Wohnungen die vermietet werden,
        welche sich als PDF ausgeben lassen. Neue Wohnungen k&ouml;nnen erfasst werden oder bestehende Wohnungen 
        k&ouml;nnen bearbeitet oder gel&ouml;scht werden. 
        <br/>
        <br/>
        <b> Vertr&auml;ge </b> <br/>
        Unter dem Men&uuml;punkt Vertr&auml;ge hat es eine &Uuml;bersicht der Mietvertr&auml;ge,
        welche sich als PDF ausgeben lassen. Neue Mietvertr&auml;ge k&ouml;nnen erfasst werden, 
        bestehende Mietvertr&auml;ge k&ouml;nnen bearbeitet oder gel&ouml;scht werden. Bezahlte Mieten 
        k&ouml;nnen unter dem Men&uuml;punkt \"Mieteingang buchen\" an den bestehende Mietvertrag gebucht werden.
        <br/>
        <br/>
        <b> Rechnungen </b> <br/>
        Unter dem Men&uuml;punkt Rechnungen hat es eine &Uuml;bersicht der erfassten Rechnungen,
        welche sich als PDF ausgeben lassen. Neue Rechnungen k&ouml;nnen erfasst werden 
        oder bestehende Rechnungen k&ouml;nnen bearbeitet oder gel&ouml;scht werden. Unter dem Men&uuml;punkt 
        \"Jahresrechnung\" sieht man die Kostenentwicklung. <br/>
        <br/>
        <b> Benutzer </b> <br/>
        Unter dem Men&uuml;punkt Benutzer gibt es eine &Uuml;bersicht der aktuellen Benutzer,
        die das Online-Verwaltungstool verwenden (PDF-Ausgabe ebenfalls m&ouml;glich). 
        Neue Benutzer k&ouml;nnen erfasst werden oder bereits bestehene Benutzer k&ouml;nnen gel&ouml;scht werden. <br/>
    </p>
</article>
";
}
?>
