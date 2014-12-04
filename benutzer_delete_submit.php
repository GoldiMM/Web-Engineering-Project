<?php 
    session_start();
    include('authorization.inc.php');
    include ('db_Cando.inc.php');

    $tablename  = 'Benutzer';
    $primaryKey = 'Benutzer_ID';    
    $deletionOK = false;
   

    //check for foreign key appearences in Vertraege:     
    $sqlConsistency = "SELECT Benutzer.Benutzer_ID FROM Benutzer " ; 
    $resultConsistency = $conn->query($sqlConsistency);
    $countRows = $resultConsistency->num_rows ;
   
    if ($resultConsistency->num_rows > 1) { //letzter Benutzer kann nicht gelöscht werden
        $deletionOK = true;
    }

    
    //process DB update after submit (former delete_dynamic_go.php)
   if (isset($_POST['submit']) and $deletionOK){
            echo "benutzer will be deleted";
            
            $sqlDelete = "DELETE FROM $tablename WHERE $primaryKey = $_POST[feld0]";
            $result = $conn->query($sqlDelete);
            if($result === FALSE) {
                die(mysql_error()); 
            }
            
    }
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
            include('aside_benutzer.inc.php');
            echo '<article id="ajax_article">'; 
                echo '</br>'; 
                if ($deletionOK) { 
                    echo "<h3> Datensatz Nr.". $_POST['feld0'] ." wurde entfernt </h3>";    
                }   
                else {
                    echo "<h3> Es ist nur ein Benutzer vorhanden - dieser kann nicht gel&ouml;scht werden.</h3>";
                }            
                    include ('edit_benutzer.inc.php');
            echo '</article>';
            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>

