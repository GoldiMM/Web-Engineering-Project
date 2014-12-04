<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Benutzer </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
    </head>
    <body>        
    	<?php
	        include('homepage.header.inc.php');    
	        include('homepage.nav.inc.php');
	        include('aside_benutzer.inc.php');
	
		// UNIQUE CODE former edit_mieter.article.inc.php
		$tablename 	= 'Benutzer';
		$primaryKey = 'Benutzer_ID';

		// variable SQL statement
		$sqlUpdate = "UPDATE $tablename SET Benutzername = 	'$_POST[feld1]' ,
									   		Passwort 	=	'$_POST[feld2]' 
					WHERE $primaryKey = $_POST[feld0] ";

		//__process transaction__
		$result = $conn->query($sqlUpdate);
		if($result === FALSE) { echo "Problem";
   			die(mysql_error()); 
		}
		else {
			echo "<article id=\"ajax_article\">";
			echo "<table border=\"1\">";
				echo "<div>";

					echo "Daten angepasst";
					echo"</br> Benutzer Nr. "; 
					echo "$_POST[feld0]   </br>" ;
					echo "Beutzername".$_POST['feld1']."</br>";
					echo "Passwort ". $_POST['feld2'] ;		
				echo "</div>";
			echo "</table>";
			echo "</article  id=\"ajax_article\">";
		}
?>