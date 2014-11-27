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

	        //UNIQUE CODE Mieter bearbeiten
			// local variables to create edit table: 
			$id=$_GET['id'];
			$tablename = 'Mieter';
			$primaryKey = 'Mieter_ID';
			$form_action = 'mieter_edit_submit.php';
			$cancel_link = 'edit_mieter.inc.php';
		?>
		
		<article id="ajax_article">
			<?php
				include ('edit.inc.php');
			?>
		</article>
	</body> 
</html> 
