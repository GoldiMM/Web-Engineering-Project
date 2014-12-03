<?php
    session_start();
    include('authorization.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Nebenkosten </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
        <?php 
            include('ajax.inc');
        ?> 
    </head>

    <body>        
        <?php
            include('homepage.header.inc.php');    
            include('homepage.nav.inc.php');
            include('aside_rechnungen.inc.php');
            //local variables
            //$pagename = 'Rechnungsliste';
            //$tablename = 'Rechnungen';       
        ?>

        <article id="ajax_article">  

        <?php   
                /*

                    include_once 'confPDO.php';

                    echo "<table class='table table-striped'>";
                    echo "<tr><th>Rechnungs-Nr.</th><th>Rechnungstyp</th><th>Wohnungs-Nr.</th><th>Name</th><th>Vorname</th><th>Betrag</th></tr>";

                    foreach ($dbh->query('SELECT * FROM Rechnungen, Mieter WHERE Rechnungen.Kategorie!="Öl" AND Mieter.Mieter_ID=Rechnungen.Mieter_ID ORDER BY Rechnungs_ID ASC') as $row) {                    

                    print_r("<tr><td>".$row['Rechnungsnummer']."</td><td>".$row['Rechnungstyp'].
                            "</td><td>".$row['Wohnungsnummer']."</td><td>".$row['Name'].
                            "</td><td>".$row['Vorname']."</td><td>".$row['Betrag']."</td></tr>");
                    }    

                    $sth = ($dbh->query('SELECT Kategorie, SUM(Betrag) FROM `rechnungen` WHERE Kategorie =\'Oel\''));
                    $gesamt = $sth->fetchColumn();
                    print_r("<tr><td><b>Total</b></td><td></td><td></td><td></td><td></td><td><b>".$gesamt."</b></td></tr>");

                    echo "</table>";
                    echo "</div>";

                    unset($dbh);
                */    

            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>