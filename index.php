<?php
    session_start();
    print_r($_SESSION);
?>

<!-- HTML - index ist die Login-Page -->
<html>
    <head>
        <title>Online-Verwaltungstool</title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
    </head>

    <body>
        <form name="formLogin" onsubmit="return checkLogin()" action="homepage.php" method="POST">
            <?php
            include('index.header.inc.php');
            ?>
            
            <nav> &nbsp; </nav>
            
            <aside> &nbsp; </aside>
            
            <?php
            include('index.article.inc.php');
            include('index.footer.inc.php');
            ?>        
        </form> 
    </body>
</html>

        
        
                
