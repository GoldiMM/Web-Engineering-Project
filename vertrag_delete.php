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
        ?>

        <article id="ajax_article"> 
       		<?php
				// local variables to define deletion 
				$id=$_GET['id'];
				$tablename = 'Mietvertraege';
				$primaryKey = 'Vertrags_ID';
				$form_action = 'vertrag_delete_submit.php';
                $cancel_link = 'edit_vertraege.inc.php';
				include ('delete.inc.php');
			?>
 		</article> 
        <?php
            include('homepage.footer.inc.php'); 
        ?>
   </body>    
</html>
