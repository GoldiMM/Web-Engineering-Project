    <body>
      <h1>Mieter erfassen</h1>
     	 <form action="new_mieter.article.inc.php" method="POST">
			     <fieldset>
			      	<legend>Neuer Mieter </legend>
			      	<select name="feld1">
						  <option value="Frau">Frau</option>
						  <option value="Herr">Herr</option>
					</select>
			      	<label>Vorname : 	<input type="text" name="feld2"> 	</label> 
			      	<label>Nachname: 	<input type="text" name="feld3"> 	</label>
			      	<label>E-Mail: 		<input type="text" name="feld4"> 	</label>
			      	<label>Telefon: 	<input type="text" name="feld5"> 	</label>
			     </fieldset>
			     <br/>
			     <input type="submit" name="submit" value="erfassen">

			     <input type="button" value=".." onclick="load('ajax_article', 'disp_mieter.article.inc.php');"> 

     	</form>

	<?php
		include ('db_Cando.inc.php');
		if (isset($_POST['submit'])){

			// #FIXME load article here // Telesko input: ev in form load sonst jQuery

			$sql = "INSERT INTO Mieter (Anrede, Vorname, Nachname, Email, Telefon)
					VALUES ('$_POST[feld1]','$_POST[feld2]', '$_POST[feld3]','$_POST[feld4]', '$_POST[feld5]')";
			$conn->multi_query($sql);
		} //end of isset
		
		// _________________________Feedback Resultat Ausgabe ___________________
			echo ("<h3>Aktuelle Mieterliste </h3> <br>");

			$sql = "SELECT Mieter_ID, Anrede, Vorname, Nachname FROM Mieter ORDER BY Mieter_ID DESC";
			$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo 	"Mieter " 		. $row["Mieter_ID"].
						        "   : "			. $row["Anrede"]. 
						        "     "			. $row["Vorname"]. 
						        "    " 			. $row["Nachname"]. "<br>";
					}
				} 
				else {
					    echo "0 results";
				}
	?>
