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

	        //UNIQUE CODE Mieter bearbeiten
			// local variables to create edit table: 
			$id=$_GET['id'];
			$tablename = 'Benutzer';
			$primaryKey = 'Benutzer_ID';
			$form_action = 'benutzer_edit_submit.php';
			$cancel_link = 'edit_benutzer.inc.php';
		?>
		
		<article id="ajax_article">
			<?php
				include ('edit.inc.php');
			?>
		</article>
	</body> 
</html> 
