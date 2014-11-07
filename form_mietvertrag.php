<html>
    <head> 
    </head>

    <body>
      <h1>Mietvertrag erfassen</h1>
     	 <form action="form_mietvertrag.php" method="POST">
			     <fieldset>
			      	<legend>Neuer Mietvertrag </legend>
			      	<label>Miete (in chf): 		<input type="text" name="feld1"> 	</label> 
			      	<label>Mieter Nummer:  		<input type="text" name="feld2"> 	</label> 
			     </fieldset>
			     <br/>
			     <input type="submit" name="submit" value="erfassen">
     	</form>
<?php
include ('db_Cando.inc.php');
// connection object missing in db.inc.php - the mysql statements dont work therefore.
//include ('db.inc.php');

if (isset($_POST['submit'])){
	
	//create local variables for the post fields
	$sql = "INSERT INTO Mietvertraege (Miete, Mieter_ID)
			VALUES ('$_POST[feld1]','$_POST[feld2]')";

	$conn->multi_query($sql);


// Feedback Ausgabe
//show inserted Data
echo ("Vertragsliste <br>");

$sql = "SELECT Vertrags_ID, Miete, Mieter_ID FROM Mietvertraege";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo 
	        "Vertag Nr. " 				. $row["Vertrags_ID"].
	        "  Miethoehe  : "			. $row["Miete"]. 
	        "  Mieter_ID   "			. $row["Mieter_ID"].  "<br>";
	    	}
		} 
		else {
		    echo "0 results";
		}



} //end of isset




?>

</body>
</html>
