<?php
    session_start();
    include('authorization.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Benutzer </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
    </head>
    <body>        
        <?php
        include('homepage.header.inc.php');    
        include('homepage.nav.inc.php');
        include('aside_benutzer.inc.php');

        //__variables__
        $pagename = 'Benutzerliste';
        $tablename = 'Benutzer';
        $form_action = 'benutzer_new.php';        
        ?>

        <!--  etc -->
        <article id="ajax_article"> 
            <?php
                //Form for generic tuple creation new.inc.php
                include('new.inc.php');
                if (isset($_POST['submit'])){

                    //__variable SQL statment__
                    $sql = "INSERT INTO $tablename (Benutzername, Passwort)
                            VALUES ('$_POST[feld1]','$_POST[feld2]'";

                    //__Processing Statement__
                    $result = $conn->query($sql);
                    if ($result === FALSE) { 
                        die(mysql_error()); 
                    }
                    // _______Process Feedback ___________________
                    echo ("<h3> Neuer Datensatz erfasst: ".$_POST['feld1']." ". $_POST['feld2']." </h3>");
                } //end of isset  
            
                //__ display updated list  
                include('display.inc.php');                                 
            ?>
        </article>

        <?php
            include('homepage.footer.inc.php');
        ?>
   </body>    
</html>