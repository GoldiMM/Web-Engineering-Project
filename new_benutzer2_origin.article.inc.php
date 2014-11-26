<?php

//START OF DATA CHECK .. [MM]
$validation = true;

//if (!empty($_POST['feld1']) AND ! empty($_POST['feld2']) ) {

    //Kontrollieren ob Benutzername bereits in der Datenbank vorhanden ist
    $benutzer = "Cando";    
    $passwordDB = "yes123";   
    $benutzername =$_POST['feld1'];
    $dbname = "hausverwaltung";
    $link = mysql_connect("localhost", $benutzer, $passwordDB) or die("Verbindung zur Datenbank fehlgeschlagen!");
    mysql_select_db($dbname) or die("Datenbank nicht gefunden!");
    $abfrage = "SELECT Benutzername FROM benutzer WHERE Benutzername='$benutzername'";
    $ergebnis = mysql_query($abfrage) or die(mysql_error());
    $row = mysql_num_rows($ergebnis);
    echo $row;
    
    if ($row == 1) {
        echo "<p> <font color=\"red\"> ACHTUNG der Benutzername <b>";
        echo $benutzername;
        echo "</b> wird bereits verwedent! <br/> Bitte verwenden Sie einen anderen Benutzername. </font> </p> ";
        $validation = false;
     }
     
//} 
/*
     //Passwoerter kontrollieren
+    else if ($passwort != $passwort2) {
+        echo "<p> <font color=\"red\"> ACHTUNG Passw&ouml;rter stimmen nicht &uuml;berein! </font> </p>";
+    }
+
+    //Sofern Passwoerter ueberein stimmen und Benutzername noch nicht in der DB vorhanden ist
+    else if (($passwort == $passwort2) && ($row == 0)) {
+
+        //Benutzer in Tabelle einfuegen
+        $insert = "INSERT INTO benutzer (Benutzername, Passwort) VALUES ('$benutzername', '$passwort')";
+        $db = mysql_query("$insert") or die(mysql_error("Datenbankeintrag neuer Benutzer hat nicht geklappt!"));
+
+        echo " <p>  <font color=\"green\" > <br/> Neuer Benutzer <b>";
+        echo $benutzername;
+        echo "</b> wurde erfasst </font></p>";
+
+        mysql_close();
+    }
+} else {
+
+    echo "<p> Bitte die entsprechenden Felder ausf&uuml;llen </p> ";
+}
     
     */
     //END OF DATA CHECK .. MM
     
     if ($validation == true) {
     
	//__variables__
	$pagename = 'Neuer Benutzer';
	$tablename = 'Benutzer';


	//__generic query__
	include ('db_Cando.inc.php');

	//__variable SQL statment__
	$sql = "INSERT INTO $tablename (Benutzername,Passwort)
			VALUES ('$_POST[feld1]','$_POST[feld2]')";

	//__generic db connection__
	$result = $conn->query($sql);
	if($result === FALSE) { die(mysql_error()); }
	else { echo "dynamic update done"; }

	//__generic query__	
	$sqlSelect = "SELECT * FROM $tablename"; 
	$result = $conn->query($sqlSelect);



	//__display__
	echo "<table border=\"1\">";
		/* Headers - dynamisch ausgeben */
				$fields = mysqli_fetch_fields($result);
				$headers = array();
				foreach ($fields as $field) {
					$headers[] = $field->name;
					echo "<th>". $field->name . "</th>\n";
				}
				echo "</tr>\n";

		/* Rows - dynamisch ausgeben */
		if ($result->num_rows > 0) {
		 	while($row = $result->fetch_assoc()) {
		 		echo "<tr>";
		 			for ($i=0; $i<sizeof($headers); $i++){
			        	echo  "<td>". $row["$headers[$i]"]."</td>";
			        }					
				echo "</tr>";      
				}
			} 
			else {
				    echo "0 results";
			}
		echo "</br>";	
	echo "</table>";
     }
?>