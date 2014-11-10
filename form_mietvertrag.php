<?php
	include ('db_Cando.inc.php');
	$sqlmieter = "SELECT Mieter_ID, Nachname, Vorname FROM Mieter";
	$result = $conn->query($sqlmieter);
	if($result === FALSE) {
   	die(mysql_error()); // TODO: better error handling
	}

	$sqlWohnungen = "SELECT Wohnungs_ID, Stockwerk, Zimmer FROM Wohnungen";
	$resultWohnungen = $conn->query($sqlWohnungen);
	if($resultWohnungen === FALSE) {
   	die(mysql_error()); // TODO: better error handling
	}
?>

<html>
    <head> 
    </head>
    <body>
      <h1>Mietvertrag erfassen</h1>
     	 <form action="form_mietvertrag_develop.php" method="POST">
			     <fieldset>
			      	<legend>Neuer Mietvertrag </legend>
			      	<label>Miete (in chf): 		<input type="text" name="feld1"> 	</label> 
					<label>Mieter:  </label> 
					<select name="feld2">
						<?php
							if ($result->num_rows > 0) {
							    //________output data from DB as dropdown-item _______
							    while($row = $result->fetch_assoc()) {
							    	$dropdownID =  		 $row["Mieter_ID"];
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
							    //________output data from DB as dropdown-item _______
							    while($row = $resultWohnungen->fetch_assoc()) {
							    	$dropdownID =  		 $row["Wohnungs_ID"];
							    	$dropdownStockwerk =  $row["Stockwerk"];
							    	$dropdownZimmer =   $row["Zimmer"];
							    	echo '<option value="'.$dropdownID.'">'.$dropdownStockwerk.". Stock ".$dropdownZimmer. "- Zi.". '</option>';
							    	}
								} 
								else {
								    echo "0 results";
								}							
						?>
					</select>
					
				</fieldset>
			    <br/>
			    <input type="submit" name="submit" value="erfassen">
     	</form>

	<?php
	//____________________________data transmission to DB ______________
	if (isset($_POST['submit'])){

		$sql = "INSERT INTO Mietvertraege (Miete, Mieter_ID, Wohnungs_ID)
				VALUES ('$_POST[feld1]','$_POST[feld2]','$_POST[feld3]')";
		$conn->multi_query($sql);
	} //end of isset


		// _______________________Feedback Resultat-Ausgabe_____________________________
		echo ("<h2> Vertragsliste </h2><br>");
		$sql = "SELECT * 	FROM Mietvertraege, Mieter, Wohnungen
							WHERE Mietvertraege.Mieter_ID = Mieter.Mieter_ID AND Mietvertraege.Wohnungs_ID = Wohnungen.Wohnungs_ID
							ORDER BY Vertrags_ID DESC" ;
		$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo 
			        "Vertag Nr. " 				. $row["Vertrags_ID"].
			        "  Miete  : "				. $row["Miete"]. ".- CHF   |   " .
		   	        "  Name: "					. $row["Nachname"]. 
		   	        "  Vorname: "				. $row["Vorname"]. "  |   " .
		   	        "  "						. $row["Zimmer"]. "- Zi Wohnung " . " im ".
		   	        ""							. $row["Stockwerk"]. ". Stock". "<br>";	
			    }
			} 
			else {
				    echo "0 results";
		}
	?>
</body>
</html>
