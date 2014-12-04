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
                          
                echo "<article id=\"ajax_article\">";
			
            //START Validation [MM] -->
            include ('validation_Mieter.php');
            //END Validation [MM]
          
                // start of if validation true 
                if ($validation == true) {
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
                        //display of result ___ //TODO better display - generic output
			echo "<table border=\"1\">";
				echo "<div>";
					echo "Daten angepasst";
					echo"</br> Mieter Nr. "; 
					echo "$_POST[feld0]   <br>" ;
					echo "$_POST[feld1]";
					echo "$_POST[feld2]" ;
					echo "$_POST[feld3]  <br>";		
					echo "$_POST[feld4]  <br>";
					echo "$_POST[feld5]"; 
				echo "</div>";
			echo "</table>";

			}
                // end of if validation true 
                else{ // if validation is false show edit contents
			// local variables to create edit table: 
			$id=$_POST['feld0'];
			$tablename = 'Mieter';
			$primaryKey = 'Mieter_ID';
			$form_action = 'mieter_edit_submit.php';
			$cancel_link = 'edit_mieter.inc.php';
                        include ('edit.inc.php');
                }
                echo "</article  id=\"ajax_article\">";
		
                include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>