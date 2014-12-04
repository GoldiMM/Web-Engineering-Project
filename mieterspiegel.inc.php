<?php
	// Create connection and query
	include ('db_Cando.inc.php');

	//________________________enter the required Table in the variable $tablename: 
	$tablename 		= 'Mieter';
	$pagename 		= 'Mieterspiegel';

	$sql = "SELECT   Anrede,  Vorname, Nachname, Zimmer, Stockwerk, Wohnungen.Wohnungs_ID,  Bezahlte_Miete, Miete  FROM Mietvertraege, Mieter, Wohnungen
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

