<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Rechnung </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
    </head>
    <body>        
    	<?php
	        include('homepage.header.inc.php');    
	        include('homepage.nav.inc.php');
	        include('aside_rechnungen.inc.php');
                
                echo "<article id=\"ajax_article\">";
                
                            //START Validation [MM] -->
            include ('validation_Rechnung.php');
            //END Validation [MM]
                   // start of if validation true 
                   if ($validation == true) {    
			// UNIQUE CODE former edit_mieter.article.inc.php
			$tablename 	= 'Rechnungen';
			$primaryKey = 'Rechnungs_ID';

			// variable SQL statement
			$sqlUpdate = "UPDATE $tablename SET Rechnungsdatum = 	'$_POST[feld1]' ,
										   		Kategorie 	=		'$_POST[feld2]' ,
										   		Betrag 		=		'$_POST[feld3]' 
			WHERE $primaryKey = $_POST[feld0] ";

			//__process transaction__			
                        $result = $conn->query($sqlUpdate);
			if($result === FALSE) {
	   			die(mysql_error()); 
			}
			
				echo "<table border=\"1\">";
					echo "<div>";
						echo "Daten angepasst";
						echo"</br> Rechnung Nr. "; 					
						echo "$_POST[feld0]   <br>" ;
						echo"Rechnungsdatum: ";
						echo "$_POST[feld1]  <br>";
						echo "Kategorie : ";
						echo "$_POST[feld2]  <br>" ;
						echo "Rechungsbetrag: CHF ";
						echo "$_POST[feld3]  <br>";		
					echo "</div>";
				echo "</table>";
				echo "</article  id=\"ajax_article\">";
			
                                
                                
                                
                        }
                        // end of if validation true 
                        else {
                        $id=$_POST['feld0'];
			$tablename = 'Rechnungen';
			$primaryKey = 'Rechnungs_ID';
			$form_action = 'rechnung_edit_submit.php';
			$cancel_link = 'edit_rechnungen.inc.php';   
                         include ('edit.inc.php');   
                         
                        }
                        
                        echo "</article  id=\"ajax_article\">";
        include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>