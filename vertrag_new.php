<?php
    session_start();
    include('authorization.inc.php');

    //__variables__
    $pagename = 'Vertragsliste';
    $tablename = 'Mietvertraege';  
    $form_action = 'vertrag_new.php';
    $old_form_action = 'new_vertrag.article.inc.php';

    //__db queries for dropdown lists
    include ('db_Cando.inc.php');
    $sqlmieter = "SELECT Mieter_ID, Nachname, Vorname FROM Mieter";
    $result = $conn->query($sqlmieter);
    if($result === FALSE) {
        die(mysql_error()); 
    }

    $sqlWohnungen = "SELECT Wohnungs_ID, Stockwerk, Zimmer FROM Wohnungen";
    $resultWohnungen = $conn->query($sqlWohnungen);
    if($resultWohnungen === FALSE) {
         die(mysql_error()); 
    }
?>

<html>
    <head> 
        <title> Online-Verwaltungstool </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
        <!-- DATE PICKER  todo exchange with include file -->
        <meta charset="utf-8">
        <title>jQuery UI Datepicker - Restrict date range</title>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
                <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script>
                    $(function() {
                    $("#datepicker").datepicker({ minDate: "-12M", maxDate: "+12M" });
                    $("#datepicker").datepicker("option", "dateFormat", "yy/mm/dd");
                    });
                </script>
                <script>
                  $(function() {
                    $( "#datepicker2" ).datepicker({ minDate: 0, maxDate: "+12M " });
                    //$("#datepicker2" ).datepicker("option", "dateFormat", "dd.mm.yy");
                  });
                </script>

        <!-- end of include file -->
    </head>
    <body>        
        <?php
            include('homepage.header.inc.php');    
            include('homepage.nav.inc.php');
            include('aside_vertraege.inc.php');           
        ?>

        <article id="ajax_article">  <!--   UNIQUE CODE  because of foreign keys drop-down lists  TODO second date into DB -->
            <h1>Mietvertrag erfassen</h1>
                <form action="<?php echo $form_action?>" method="POST">
                    <fieldset>
                        <legend>Neuer Mietvertrag       </legend>
                        <label>Miete (in chf):          <input type="text" name="feld1">    </label> 
                        <label>Mietbeginn (tt/mm/jj):   <input type="text" id="datepicker" name="datum1"></label> 
                        <label>Mieter:  </label> 
                        <select name="feld2">
                            <?php
                                if ($result->num_rows > 0) {
                                    //________output data Mieter from DB as dropdown-item _______
                                    while($row = $result->fetch_assoc()) {
                                        $dropdownID =        $row["Mieter_ID"];
                                        $dropdownNachname =  $row["Nachname"];
                                        $dropdownVorname =   $row["Vorname"];
                                        echo '<option value="'.$dropdownID.'">'.$dropdownVorname."  ".$dropdownNachname.'</option>';
                                        }
                                    } 
                                    else {
                                        echo "0 results";
                                    }                           
                            ?>
                        </select>

                        <label>Wohnung:  </label> 
                        <select name="feld3">
                            <?php
                                if ($resultWohnungen->num_rows > 0) {
                                    //________output Wohnungen  from DB as dropdown-item _______
                                    while($row = $resultWohnungen->fetch_assoc()) {
                                        $dropdownID =           $row["Wohnungs_ID"];
                                        $dropdownStockwerk =    $row["Stockwerk"];
                                        $dropdownZimmer =       $row["Zimmer"];
                                        echo '<option value="'.$dropdownID.'">'.$dropdownStockwerk.". Stock ".$dropdownZimmer. "- Zi.". '</option>';
                                        }
                                    } 
                                    else {
                                        echo "Keine Daten vorhanden";
                                    }                           
                            ?>
                        </select>                    
                    </fieldset>
                    <br/>
                    <input type="submit" name="submit" value="erfassen">
                </form>

            <!-- START Validation [MM] -->
            <?php
            $validation = false;
            if (isset($_POST['submit'])) {
            include ('validation_Vertrag.php');
            }
            ?>
            <!-- END Validation [MM] -->
            
            <?php
            if ($validation == true) {
                //____________________________data transmission to DB ______________
                if (isset($_POST['submit'])){
                    $sql = "INSERT INTO Mietvertraege (Miete, Mietbeginn, Mieter_ID, Wohnungs_ID)
                            VALUES ('$_POST[feld1]','$_POST[datum1]','$_POST[feld2]','$_POST[feld3]')";  
                    $conn->multi_query($sql);
                    echo ("<h3> Neuer Vertrag erfasst f&uuml;r auf Wohnung nr. ".$_POST['feld3']." Mieter Nr. ".$_POST['feld2']." </h3>");    
                } //end of isset
<<<<<<< Updated upstream
            }
=======

                //__display of contracts__   
                $pagename       = 'Vorhandene Vertr&auml;ge';
>>>>>>> Stashed changes

                $sql = "SELECT   Vertrags_ID, Anrede,  Vorname, Nachname, Mietvertraege.Wohnungs_ID, Zimmer, Stockwerk,  Bezahlte_Miete, Miete  FROM Mietvertraege, Mieter, Wohnungen
                        WHERE Mietvertraege.Mieter_ID = Mieter.Mieter_ID                           
                        AND    Mietvertraege.Wohnungs_ID = Wohnungen.Wohnungs_ID
                        ORDER BY Vertrags_ID DESC" ;
            
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    include ('display.join.inc');
                }
                else {
                    echo "Keine Daten vorhanden";
                }
            ?>
        </article>

        <?php
            include('homepage.footer.inc.php');
        ?>
   </body>    
</html>