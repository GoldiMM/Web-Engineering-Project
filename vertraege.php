<?php
    session_start();
    include('authorization.inc.php');
    include ('db_Cando.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Vertraege </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
        <?php 
            include('ajax.inc');
        ?> 
    </head>

    <body>        
        <?php
            include('homepage.header.inc.php');        
            include('homepage.nav.inc.php');       
            include('aside_vertraege.inc.php');                  
            //local variables
            $pagename = 'Vertragsliste';
            $tablename = 'Mietvertraege';       
        ?>

        <article id="ajax_article" class="article">         
            <?php 
                 //__display of contracts__   
                $pagename       = 'Vorhandene Vertr&auml;ge';
                $sql = "SELECT   Vertrags_ID, Anrede,  Vorname, Nachname, Mietvertraege.Wohnungs_ID, Zimmer, Stockwerk,  Bezahlte_Miete, Miete, Mietbeginn FROM Mietvertraege, Mieter, Wohnungen
                        WHERE Mietvertraege.Mieter_ID = Mieter.Mieter_ID                           
                        AND    Mietvertraege.Wohnungs_ID = Wohnungen.Wohnungs_ID
                        " ;
            
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    include ('display.join.inc');
                }
                else {
                    echo "Keine Daten vorhanden";
                }

                //PDF [FB]
                echo "<form name=\"pdf\" action=\"pdfVertraege.php\" method=\"POST\">
                 <input type=\"submit\"  value=\"PDF-Ausgabe\" > </form>    ";
            ?>
        </article>
        
        <?php
            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>