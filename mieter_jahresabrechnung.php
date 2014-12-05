<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Mieter Jahresrechnung </title>
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

	        //UNIQUE CODE Mieter bearbeiten
			// local variables to create edit table: 
			$id=$_POST['feld0'];	
			echo $id;

			$tablename = 'Mieter';
			$primaryKey = 'Mieter_ID';
			//$form_action = 'mieter_edit_submit.php';
			$cancel_link = 'jahresabrechnung.php';
		?>
		
		<article id="ajax_article">
		<?php
			$sqlSelect = "SELECT Mieter_ID, Anrede,  Vorname, Nachname
						FROM $tablename 
                        WHERE $primaryKey = $id ";
			
            $result = $conn->query($sqlSelect);
			if($result === FALSE) {
	   			die(mysql_error()); 
			}  

			include ('display.join.inc') ;
		?>
		</article>
	</body> 
</html> 
