<html>
    <head> 
    </head>
    <body>
      <h1>Mieter erfassen</h1>
     	 <form action="form_mieter.php" method="POST">
			     <fieldset>
			      	<legend>Neuer Mieter </legend>
			      	<select name="feld1">
						  <option value="Frau">Frau</option>
						  <option value="Herr">Herr</option>
					</select>
			      	<label>Vorname : 	<input type="text" name="feld2"> 	</label> 
			      	<label>Nachname: 	<input type="text" name="feld3"> 	</label> 
			     </fieldset>
			     <br/>
			     <input type="submit" name="submit" value="erfassen">
     	</form>
<?php
include ('db_Cando.inc.php');

if (isset($_POST['submit'])){
	
	//create local variables for the post fields
	$sql = "INSERT INTO Mieter (Anrede, Vorname, Nachname)
			VALUES ('$_POST[feld1]','$_POST[feld2]', '$_POST[feld3]')";

	$conn->multi_query($sql);

// 																	Feedback Ausgabe
echo ("<h3>Aktuelle Mieterliste </h3> <br>");

$sql = "SELECT Mieter_ID, Anrede, Vorname, Nachname FROM Mieter";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo 
	        "Mieter " 	. $row["Mieter_ID"].
	        "   : "			. $row["Anrede"]. 
	        "     "			. $row["Vorname"]. 
	        "    " 			. $row["Nachname"]. "<br>";
	    	}
		} 
		else {
		    echo "0 results";
		}


} //end of isset




?>

</body>
</html>
