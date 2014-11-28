<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');

	


?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Mieteingang </title>
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

	        //__SQL Variables
	        $tablename = 'Mietvertraege';
	        $primaryKey = 'Vertrags_ID';
	        //__query for calculation 
			$sqlVertraege ="	SELECT *
								FROM Mietvertraege 						
								WHERE $primaryKey = $_GET[id] ";
   			$resultVertraege = $conn->query($sqlVertraege);
    		if($resultVertraege === FALSE) { echo "problem sql vertraege";
        		die(mysql_error()); 
    		}
			//__ calculation of new balance
			$row = $resultVertraege->fetch_assoc(); 
			$mietzahlungen 	= $row["Bezahlte_Miete"] ;		
			$miethöhe 		= $row["Miete"] ;
			$neuerZahlungsaldo = $mietzahlungen + $miethöhe;
			//echo ($miethöhe."-> Miete ") ;
			//echo ($mietzahlungen."-> zahlungen ");
			//echo ($neuerZahlungsaldo."-> neuerZahlungsaldo ");

			//__update balance statement
			$sqlUpdate = "		UPDATE $tablename SET Bezahlte_Miete ='$neuerZahlungsaldo' 
								WHERE  $primaryKey = $_GET[id]  ";

			//__process transaction		
			$result = $conn->query($sqlUpdate);
			if($result === FALSE) {
   				die(mysql_error()); 
			}
			else {
				?>
				<article id=\"ajax_article\">
					<table border=\"1\">
						<div>
							Miete erfasst Vertrag Nr.	<?php echo $_GET['id']?>
							Neuer Zahlungssaldo 		<?php echo $neuerZahlungsaldo?>

						</div>
					</table>
				</article  id=\"ajax_article\">
			<?php
			}
			?>