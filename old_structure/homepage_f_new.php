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
        
        include('homepage.nav.inc.php');
        
        include('homepage_f.aside.inc.php');
                    
        include('new_benutzer.article.inc.php'); 
        include('homepage.footer.inc.php');
        ?>
             
    </body>
    
</html>
