<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Wohnung </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
    </head>
    <body>        
    	<?php
	        include('homepage.header.inc.php');    
	        include('homepage.nav.inc.php');
	        include('aside_wohnungen.inc.php');
	
                echo "<article id=\"ajax_article\">";
                
                //START Validation [MM] -->
                include ('validation_Wohnung.php');
                //END Validation [MM]
            
                // start of if validation true 
                 if ($validation == true) {
		// UNIQUE CODE former edit_mieter.article.inc.php
		$tablename 	= 'Wohnungen';
		$primaryKey = 'Wohnungs_ID';
		$sqlUpdate 	= "UPDATE $tablename SET  Stockwerk =  	'$_POST[feld1]' ,
									   		Adresse =		'$_POST[feld2]' ,
									   		Postleitzahl =	'$_POST[feld3]' ,
									   		Ort =			'$_POST[feld4]' ,
									   		Quadratmeter =	'$_POST[feld5]' ,
									   		Zimmer =		'$_POST[feld6]'
					WHERE $primaryKey = $_POST[feld0] ";
		//__process transaction		
		$result = $conn->query($sqlUpdate);
		if($result === FALSE) {
   			die(mysql_error()); 
		}
		
			echo "<table border=\"1\">";
				echo "<div>";
					echo "Daten angepasst: Wohnung Nr. "; 
					echo "$_POST[feld0]   <br>" ;
					echo "$_POST[feld1]";
					echo "$_POST[feld2]" ;
					echo "$_POST[feld3]  <br>";		
					echo "$_POST[feld4]  <br>";
					echo "$_POST[feld5]"; 
					echo "$_POST[feld6]"; 
				echo "</div>";
			echo "</table>";
						
                 }
                // end of if validation true          
                                                else {
                                	        //UNIQUE CODE Wohnung bearbeiten
			// local variables to create edit table: 
			$id=$_POST['feld0'];
			$tablename = 'Wohnungen';
			$primaryKey = 'Wohnungs_ID';
			$form_action = 'wohnung_edit_submit.php';
			$cancel_link = 'edit_wohnungen.inc.php';
                        include ('edit.inc.php');                              
		}           
                echo "</article  id=\"ajax_article\">";
                  include('homepage.footer.inc.php'); 
                ?>
           </body>    
</html>