<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Vertrag </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
    </head>
    <body>        
    	<?php
	        include('homepage.header.inc.php');    
	        include('homepage.nav.inc.php');
	        include('aside_vertraege.inc.php');
	
		// UNIQUE CODE former edit_mieter.article.inc.php
		$tablename 	= 'Mietvertraege';
		$primaryKey = 'Vertrags_ID';

		// variable SQL statement
		$sqlUpdate 	= "UPDATE $tablename SET  	Miete 			='$_POST[feld1]' ,
									   			Bezahlte_Miete 	='$_POST[feld2]' ,
									   			Mietbeginn		='$_POST[feld3]' ,
									   			Mietende 		='$_POST[feld4]' ,
									   			Mieter_ID		='$_POST[feld5]' ,
									   			Wohnungs_ID		='$_POST[feld6]'
					WHERE $primaryKey = $_POST[feld0] ";
		//__process transaction		
		$result = $conn->query($sqlUpdate);
		if($result === FALSE) {
   			die(mysql_error()); 
		}
		else {
			echo "<article id=\"ajax_article\">";
			echo "<table border=\"1\">";
				echo "<div>";
					echo "Daten angepasst: Vertrag Nr. "; 
					echo "$_POST[feld0] <br>" ;
					echo "Miete";
					echo "$_POST[feld1] <br>";
					echo "Zahlunssaldo - Bezahlte Miete";
					echo "$_POST[feld2] <br>" ;
					echo "Mietbeginn ";
					echo "$_POST[feld3]  <br>";		
					echo "Mietende ";
					echo "$_POST[feld4]  <br>";
					echo "Mieter_ID : ";
					echo "$_POST[feld5] <br>"; 
					echo "Wohnungs_ID : ";
					echo "$_POST[feld6] <br>"; 
				echo "</div>";
			echo "</table>";
			echo "</article  id=\"ajax_article\">";
		}
?>