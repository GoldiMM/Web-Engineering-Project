<?php

//include ('db.inc.php');

$benutzer = "Cando";
$passwort = "yes123";
$dbname = "Hausverwaltung";

mysqli_connect("localhost", "$benutzer", "$passwort");
mysql_select_db("$dbname");

//connect to db
mysql_connect("localhost", "$benutzer", "$passwort", "$dbname");

//query the database
//$query = $conn->query("SELECT * FROM 'table");
$sqlSelect = "SELECT Vertrags_ID, Miete, Mieter_ID FROM Hausverwaltung.Mietvertraege";
$result = mysql_query($sqlSelect); 

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

//echo "$result" ;

//number of entries
$entryCount = mysql_num_rows($result);

echo $entryCount	;

//Create an array of objects for each returned row
//while($array[] = $query->fetch_object());

//$row=mysql_fetch_array($query, MYSQLI_NUM);
//printf ($row[0], $row[1]);

//$row=mysql_fetch_assoc($query, MYSQLI_ASSOC);
//printf ($row["ID"], $row["Field1"] )
// remove blank entries at the end of the array

//array_pop ($array);

?>
<!--
<h3> Develop Dropdown </h3>
<select name="the_name">
	<?php foreach($row as $option) : ?>
			
			<option value="	<?php echo $option->ID;  ?>"  >
							<?php echo $option->Field1;  ?>
			</option>
	<?php endforeach; ?>
</select>
-->
