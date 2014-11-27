<?php
    session_start();
    include('authorization.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Wohnungen </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
        <?php 
            include('ajax.inc');
        ?> 
    </head>

    <body>        
        <?php
            include('homepage.header.inc.php');    
            include('homepage.nav.inc.php');
            include('aside_wohnungen.inc.php');
            //local variables
            $pagename = 'Wohnungsliste';
            $tablename = 'Wohnungen';       
        ?>

        <article id="ajax_article">         
            <?php 
                include ('display.inc.php');   
            ?>
        </article>
        
        <?php
            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>