<?php
    session_start();
    include('authorization.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Rechnungen </title> 
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
            $pagename = 'Rechnungsliste';
            $tablename = 'Rechnungen';       
        ?>

        <article id="ajax_article">         
            <?php 
                include ('display.inc.php');
                //PDF [FB]
                echo "<form name=\"pdf\" action=\"pdfrechnung.php\" method=\"POST\">
                 <input type=\"submit\"  value=\"PDF-Ausgabe\" > </form>    ";
            ?>
        </article>
        
        <?php
            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>