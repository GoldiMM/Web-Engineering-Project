<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Mieter </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
    </head>
    <body>        
    	<?php
	        include('homepage.header.inc.php');    
	        include('homepage.nav.inc.php');
	        include('aside_mieter.inc.php');
	
			// UNIQUE CODE former edit_mieter.article.inc.php
			$tablename = 'Mieter';
			$primaryKey = 'Mieter_ID';
			$sqlUpdate = "UPDATE $tablename SET Anrede =  	'$_POST[feld1]' ,
										   		Vorname =	'$_POST[feld2]' ,
										   		Nachname =	'$_POST[feld3]' ,
										   		Email =		'$_POST[feld4]' ,
										   		Telefon =	'$_POST[feld5]'
			WHERE $primaryKey = $_POST[feld0] ";
			$result = $conn->query($sqlUpdate);
			if($result === FALSE) {
	   			die(mysql_error()); 
			}
			else {

			//display of result ___ //TODO better display - generic output

			echo "<article id=\"ajax_article\">";
			echo "<table border=\"1\">";
				echo "<div>";
					echo "following data is updated: ID Nr. "; 
					echo "$_POST[feld0]   <br>" ;
					echo "$_POST[feld1]";
					echo "$_POST[feld2]" ;
					echo "$_POST[feld3]  <br>";		
					echo "$_POST[feld4]  <br>";
					echo "$_POST[feld5]"; 
				echo "</div>";
			echo "</table>";
			echo "</article  id=\"ajax_article\">";
			}
	
	        include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>