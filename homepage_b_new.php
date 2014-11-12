<!-- PHP -->
<?php
// vorhandene Session aufnehmen
session_start();
?>
<!-- PHP -->

<!-- HTML -->
<html>
    <head> 
        <title> Online-Verwaltungstool </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
    </head>

    <body>
        
        <?php
        include('homepage.header.inc.php');    
        ?>
        
        <?php
        include('homepage.nav.inc.php');
        ?>
        
        <?php
        include('homepage_b.aside.inc.php');
        ?>
                    
        <?php
        include('mieter_new.article.inc.php');
        ?>


        <?php
        include('homepage.footer.inc.php');
        ?>
             
    </body>
    
</html>

