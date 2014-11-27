<?php
	include ('db_Cando.inc.php');
	$sqlRechnungen = "SELECT Kategorie FROM Rechnungen";
	$result = $conn->query($sqlRechnungen);
	if($result === FALSE) {
   	die(mysql_error()); 
	}
?>

<html>
    <head> 
	  <meta charset="utf-8">
	  <title>jQuery UI Datepicker - Restrict date range</title>
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
			  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
			  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
			  <link rel="stylesheet" href="/resources/demos/style.css">
				<script>
					$(function() {
					$("#datepicker").datepicker({ minDate: 0, maxDate: "+12M" });
					$("#datepicker").datepicker("option", "dateFormat", "yy/mm/dd");
					});
				</script>
    </head>

    <body>
      <h1>Rechnung erfassen</h1>
     	 <form action="form_rechnung.php" method="POST">
			     <fieldset>
			      	<legend>Neue Rechnung</legend>
			      	<label>Betrag (in chf): 		<input type="text" name="feld1"> 	</label> 
					<label>Kategorie:  </label> 
					<select name="feld2">
						  <option value="Reparaturen">Reparaturen</option>
						  <option value="Oel">Oel</option>
						  <option value="Wasser">Wasser</option>
						  <option value="Strom">Strom</option>
					</select>
					<label>Datum (tt/mm/jj): 	 <input type="text" id="datepicker" name="datum1"></label> 	
    			</fieldset>
			    <br/>
			<input type="submit" name="submit" value="erfassen">
     	</form>

	<?php
	//____________________________data transmission to DB ______________
	if (isset($_POST['submit'])){

		$sql = "INSERT INTO Rechnungen (Betrag, Kategorie, Rechnungsdatum)
				VALUES ('$_POST[feld1]','$_POST[feld2]','$_POST[datum1]')";
		$conn->multi_query($sql);
	} //end of isset


		//_______________________Feedback Resultat-Ausgabe_____________________________
		echo ("<h2> Rechnungsliste </h2><br>");
		$sql = "SELECT * 	FROM Rechnungen	" ;
		$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo 
			        "Rechnungs_ID " 			. $row["Rechnungs_ID"].
			        "  Betrag  : "				. $row["Betrag"]. " CHF   |   " .
		   	        "  Kategorie: "				. $row["Kategorie"]. 
		   	        "  Rechnungsdatum: "		. $row["Rechnungsdatum"]. 
		   	        "<br>";	
			    }
			} 
			else {
				    echo "0 results";
		}
	?>
</body>
</html>
