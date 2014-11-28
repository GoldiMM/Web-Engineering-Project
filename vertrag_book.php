<?php
    session_start();
    include('authorization.inc.php');
	include ('db_Cando.inc.php');

	//SQL queries for processing booking

	$sqlVertraege = "SELECT Vertrags_ID, Miete, Bezahlte_Miete, Mieter_ID FROM Mietvertraege";
    $resultVertraege = $conn->query($sqlVertraege);
    if($resultVertraege === FALSE) { echo "problem sql vertraege";
        die(mysql_error()); 
    }

    $sqlmieter = "SELECT Mieter_ID, Nachname, Vorname FROM Mieter";
    $resultMieter = $conn->query($sqlmieter);
    if($resultMieter === FALSE) { echo "problem sql mieter";
        die(mysql_error()); 
    }

    $sqlWohnungen = "SELECT Wohnungs_ID, Stockwerk, Zimmer FROM Wohnungen";
    $resultWohnungen = $conn->query($sqlWohnungen);
    if($resultWohnungen === FALSE) { echo "problem sql wohnungen";
         die(mysql_error()); 
    }
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

	        //UNIQUE CODE Mieteingang erfassen
			
			$mieter_id = $_POST['m_id'];

			//$tablename = 'Mietvertraege';
			$primaryKey = 'Vertrags_ID';
			$link_action = 'vertrag_book_submit.php';
			$cancel_link = 'vertraege.php';


		?>
		<article id="ajax_article">
		<?php
            //__________________________________________
            if (isset($_POST['submit'])){
            	$mieter_id = $_POST['m_id'];
            	
            	$sql = "SELECT *    FROM Mietvertraege, Mieter
                                    WHERE Mietvertraege.Mieter_ID = $mieter_id AND Mieter.Mieter_ID = $mieter_id
                                    ORDER BY Vertrags_ID DESC" ;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <div>
                            	Vertrags ID:<?php echo $row["Vertrags_ID"] ?>                            
                            				<?php echo $row["Vorname"] ?>	
                            	 			<?php echo $row["Nachname"] ?>	
                            	Mieter ID:	<?php echo $row["Mieter_ID"] ?>	
                            	Monatsmiete:<?php echo $row["Miete"] ?>	
                            	<a href="vertrag_book_submit.php?id=<?php echo $row["Vertrags_ID"]; ?>">
                            		<button type="button">Miete buchen</button>
                            	</a>	
                            </div>

 							<?php
                        } //end of while loop
                } 
                else {
                    echo "Kein Mietvertrag vorhanden"; 
                	?>                  
                    <input type="button" value="Erneut suchen" onclick="load('ajax_article', 'book_vertraege.inc.php');"> 
                    <?php
                }
		    } //end of isset
		?>					
		</article>
	</body> 
</html> 