<?php
    session_start();
    include('authorization.inc.php');

    //__variables__
    $pagename = 'Rechnungsliste';
    $tablename = 'Rechnungen';  
    $form_action = 'rechnung_new.php';
    $old_form_action = 'form_rechnung.php';

    //__db queries for dropdown lists
    include ('db_Cando.inc.php');
    $sqlRechnungen = "SELECT Kategorie FROM Rechnungen";
    $result = $conn->query($sqlRechnungen);
    if($result === FALSE) {
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
        <!-- DATE PICKER  todo create include file -->
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

        <article id="ajax_article">  <!--   UNIQUE CODE  because of foreign keys drop-down lists -->
            <h1>Rechnung erfassen</h1>
                <form action="<?php echo $form_action?>" method="POST">
                    <fieldset>
                        <legend>Neue Rechnung</legend>
                        <label>Betrag (in chf):         <input type="text" name="feld1">    </label> 
                        <label>Datum (tt/mm/jj):     <input type="text" id="datepicker" name="feld2"></label> 
                        <label>Kategorie:  </label> 
                        <select name="feld3">
                              <option value="Reparaturen">Reparaturen</option>
                              <option value="Oel">Oel</option>
                              <option value="Wasser">Wasser</option>
                              <option value="Strom">Strom</option>
                        </select>
                        <label>Lieferant: <input type="text" name="feld4"> </label> 
                    </fieldset>
                    <br/>
                <input type="submit" name="submit" value="Daten erfassen">
            </form>

            <?php
                //____________________________data transmission to DB ______________
                if (isset($_POST['submit'])){
                    $sql = "INSERT INTO Rechnungen (Betrag, Rechnungsdatum, Kategorie, Lieferant)
                            VALUES ('$_POST[feld1]','$_POST[feld2]','$_POST[feld3]','$_POST[feld4]')";
                    $conn->multi_query($sql);
                    echo ("<h3> Neuer Datensatz erfasst ".$_POST['feld1'].".- CHF in Rg. Kategorie ".$_POST['feld3']." Lieferant: ".$_POST['feld4']." </h3>");    
                } //end of isset
            // Ausgabe der Liste
            include ('display.inc.php');

        echo'</article>';
        include('homepage.footer.inc.php');
        ?>
   </body>    
</html>