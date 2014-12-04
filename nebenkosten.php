<?php
    session_start();
    include('authorization.inc.php');
    //local Variables 
    $pagename = 'Nebenkostenabrechnung';
    $tablename = 'Rechnungen';     
    $gesamtflaeche = array();
    $totalNebenkosten = 2;
    $wohnungsflaeche = 2; 
    $mieter_ID = 0;
    

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
            
     

       echo'<article id="ajax_article">';  
                //sql queries //Total Nebenkosten 
    include ('db_Cando.inc.php');
    $sql = "SELECT Kategorie, SUM(Betrag) AS Kosten
            FROM Rechnungen
            GROUP BY Kategorie
            " ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
//        echo "Abfrage OK";
        include ('display.join.inc');
       // include ('display.inc.php');
    }
    else {
    	echo "Keine Daten vorhanden";
    }
    
    // SQL Query für Gesamtflaeche
    $sql = "SELECT SUM(Betrag) AS Totalnebenkosten
            FROM Rechnungen
            " ;
    $result = $conn->query($sql);     
    if ($result->num_rows > 0) {
//        echo "Abfrage OK";
        include ('display.join.inc');
        $row = $result->fetch_assoc();
        $gesamtflaeche = $row["Quadratmeter"];
    }
    else {
    	echo "Keine Daten vorhanden";
    }  
                //PDF [FB]
                echo "<form name=\"pdf\" action=\"pdfjahresendabrech.php\" method=\"POST\">
                        <input type=\"submit\"  value=\"PDF-Ausgabe\" > </form>    ";

                   

            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>