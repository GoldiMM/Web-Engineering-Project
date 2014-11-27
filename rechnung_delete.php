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
        ?>

        <article id="ajax_article"> 
       		<?php
				// local variables to define deletion 
				$id=$_GET['id'];
				$tablename = 'Rechnungen';
				$primaryKey = 'Rechnungs_ID';
				$form_action = 'rechnung_delete_submit.php';
                $cancel_link = 'edit_rechnungen.inc.php';
				include ('delete.inc.php');
			?>
 		</article> 
        <?php
            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>
