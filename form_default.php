<html>
    <head> 
    </head>

    <body>
      <h1>Form Name</h1>
     	 <form action="form_default.php" method="POST">
			     <fieldset>
			      	<legend>Titel</legend>
			      	<label>Feld 1 : <input type="text" name="feld1"> 	</label> 
			      	<label>Feld 2 : <input type="text" name="feld2"> 	</label> 
			      	<select>
						  <option value="t1">Team 1</option>
						  <option value="t2">Team 2</option>
						  <option value="t3">Team 3</option>
						  <option value="t4">Team 4</option>
					</select>
			     </fieldset>
			     <br/>
			     <input type="submit" name="submit" value="schicken">
     	</form>
<?php
include ('db_Cando.inc.php');
if (isset($_POST['submit'])){

//create local variables for the post fields
	$sql = "INSERT INTO Benutzer (Benutzername, Passwort)
			VALUES ('$_POST[feld1]','$_POST[feld2]' )";

	// Feedback
	if ($conn->multi_query($sql) === TRUE) {
	    echo "New records created successfully";
	} else { 
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

} //end of isset

?>

</body>
</html>