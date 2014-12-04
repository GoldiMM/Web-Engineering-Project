<?php
    session_start();
    include('authorization.inc.php');
    //local Variables 
    $pagename = '';
    //$tablename = 'Rechnungen';     
    //$gesamtflaeche = 0;
    //$totalNebenkosten = 0;
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Jahresabrechnung </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
        <?php 
            include('ajax.inc');
        ?> 
    </head>

    <body>        
        <?php
        include('homepage.header.inc.php');    
        include('homepage.nav.inc.php');
        include('aside_rechnungen.inc.php'); 
        include ('db_Cando.inc.php');

        // SQL Query setzt local Variable totalNebenkosten
        $sqlKosten = "SELECT SUM(Betrag) AS Totalnebenkosten
            FROM Rechnungen
             " ;
        $resultKosten = $conn->query($sqlKosten);    
        $rowKosten = mysqli_fetch_assoc($resultKosten);
        $totalNebenkosten = $rowKosten['Totalnebenkosten'];

        // SQL Query setzt local Variable Gesamtflaeche
        $sqlArea = "SELECT SUM(Quadratmeter) AS Gesamtflaeche
            FROM Wohnungen
            " ;
        $resultArea = $conn->query($sqlArea);    
        $rowArea = mysqli_fetch_assoc($resultArea);
        $gesamtflaeche = $rowArea['Gesamtflaeche'];
        // Rundet Float auf zwei Kommastellen : 
        $beitragProQmFLOAT = $totalNebenkosten / $gesamtflaeche;
        $beitragProQm = number_format($beitragProQmFLOAT, 2); 

        echo'<article id="ajax_article">';  
            echo'<h3> Jahresabrechnung 2014 </h3>';
            
            // SQL Query Ausgabe Kosten Pro Kategorie
            $sql = "SELECT Kategorie, SUM(Betrag) AS Kosten
                FROM Rechnungen
                GROUP BY Kategorie
                " ;
            $result = $conn->query($sql);
            include ('display.join.inc');
            // SQL Query Ausgabe Kosten total 
            $sql = "SELECT SUM(Betrag) AS Totalnebenkosten
                        FROM Rechnungen
                        " ;
            $result = $conn->query($sql);  
            include ('display.join.inc');
            // SQL Query Ausgabe Flaeche total
            $sql = "SELECT  SUM(Quadratmeter) AS Gesamtflaeche
                            FROM Wohnungen
                            " ;
            $result = $conn->query($sql);
            include ('display.join.inc');
            // Ausgabe Kostenanteil Pro Quadratmeter
            echo '<table width="60% border="2" cellspacing="0.5pt" cellpadding="0.5 pt" class="t">';
                echo'<th> Kostenanteil pro Quadratmeter </th>';
                echo'<tr> <td>';
                echo $beitragProQm. " CHF/QM"; 
                echo'</td> </tr>';
            echo '</table>';


            //__pro Mieter die Anzahl QM der Wohnung auslesen 
            $sqlQM = "SELECT  Mieter.Mieter_ID, Mieter.Vorname, Mieter.Nachname,
                    Mietvertraege.Wohnungs_ID,  Wohnungen.Quadratmeter, Mietvertraege.Wohnungs_ID 
                    FROM   Mieter, Mietvertraege, Wohnungen
                    WHERE Mieter.Mieter_ID = Mietvertraege.Mieter_ID
                    AND   Mietvertraege.Wohnungs_ID = Wohnungen.Wohnungs_ID
                    ORDER BY Quadratmeter DESC" ;
            
            $result = $conn->query($sqlQM);
            if ($result->num_rows > 0) {                 
                //__display__
                echo "<h2>".$pagename."</h2>";
                    echo '<table width="60% border="2" cellspacing="0.5pt" cellpadding="0.5 pt" class="t">';


                        // Headers - dynamisch ausgeben 
                        $fields = mysqli_fetch_fields($result);
                        $headers = array();
                        foreach ($fields as $field) {
                            $headers[] = $field->name;
                            echo "<th>". $field->name . "</th>\n";
                        }
                        echo "<th> Beitrag pro Mieter </th>\n";
                        echo "</tr>\n";
                        // Row - dynamisch ausgeben 
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                    for ($i=0; $i<sizeof($headers); $i++){
                                        echo  "<td>". $row["$headers[$i]"]."</td>";
                                    }    
                                    echo   "<td>". ($row['Quadratmeter'] * $beitragProQm ). " CHF </td>";              
                                echo "</tr>";      
                            }
                        } 
                        else {
                                echo "Keine Daten vorhanden";
                        }
                    echo"<br>";
                    echo "</table>";
                echo "</br>";
            }
            else {
                echo "Keine Daten vorhanden";
            }
             include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>