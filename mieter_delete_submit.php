<?php 
    session_start();
    include('authorization.inc.php');
    include ('db_Cando.inc.php');

    $tablename = 'Mieter';
    $primaryKey = 'Mieter_ID';

    
    //process DB update after submit (former delete_dynamic_go.php)
    if (isset($_POST['submit'])){
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
            include('aside_mieter.inc.php');
        ?>

        <article id="ajax_article"> 
            </br> 
            <h3> Datensatz Nr. <?php echo $_POST['feld0'] ?> wurde entfernt </h3>               
            <?php 
                include ('edit_mieter.inc.php')
            ?>
        </article>

        <?php
            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>

