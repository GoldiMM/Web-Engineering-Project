<?php
    session_start();
    include('authorization.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool </title>
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

            //__variables__
            $pagename = 'Wohnungsliste';
            $tablename = 'Wohnungen';
            $form_action = 'wohnung_new.php';
        ?>

        <article id="ajax_article"> 
            <?php  
                //Form for generic tuple creation new.inc.php
                include('new.inc.php');

                         //      <!-- START Validation [MM] -->
            
            $validation = false;
            if (isset($_POST['submit'])) {
            include ('validation_Wohnung.php');
            }
            
            //<!-- END Validation [MM] -->
                
                if ($validation == true) {
                if (isset($_POST['submit'])){
                    //__variable SQL statment__
                    $sql = "INSERT INTO $tablename (Stockwerk, Adresse, Postleitzahl, Ort, Quadratmeter, Zimmer)
                            VALUES ('$_POST[feld1]','$_POST[feld2]','$_POST[feld3]','$_POST[feld4]','$_POST[feld5]','$_POST[feld6]')";

                    //__Processing Statement__
                    $result = $conn->query($sql);
                    if ($result === FALSE) { 
                        die(mysql_error()); 
                    }
                        
                    // _______Process Feedback ___________________
                    echo ("<h3> Neuer Datensatz erfasst: ".$_POST['feld1']." ". $_POST['feld2']." ".$_POST['feld3']."</h3>");
                } //end of isset  
                }
                
                //__ display updated list     
                include('display.inc.php');    
            ?>
        </article>

        <?php
            include('homepage.footer.inc.php');
        ?>
   </body>    
</html>