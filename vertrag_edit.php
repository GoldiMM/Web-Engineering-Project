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
          	include('datepicker.inc.php');
        ?>
    </head>
    <body>        
        <?php
	        include('homepage.header.inc.php');    
	        include('homepage.nav.inc.php');
	        include('aside_vertraege.inc.php');

	        //UNIQUE CODE Mieter bearbeiten
			// local variables to create edit table: 
			$id=$_GET['id'];
			$tablename = 'Mietvertraege';
			$primaryKey = 'Vertrags_ID';
			$form_action = 'vertrag_edit_submit.php';
			$cancel_link = 'edit_vertraege.inc.php';
		?>
		
		<article id="ajax_article">
			<?php 								// almost copy of edit.inc.php - just with exceptions for dropdowns
				$sql = "SELECT * FROM $tablename WHERE $primaryKey = '$id'";  
				$result = $conn->query($sql);
				if($result === FALSE) {
		   			die(mysql_error()); 
				}

				$row = $result->fetch_assoc();
				$fields = mysqli_fetch_fields($result);
				$headers = array();		
			?>
			<table border="1">
				<form action="<?php echo $form_action?>" method="POST">
					<?php
						/* Tabellenkopf dynamisch ausgeben */
						foreach ($fields as $field) {
							$headers[] = $field->name;
							echo "<th>". $field->name . "</th>\n";
						}
						echo "</tr>\n";

				/* Eingabefelder  dynamisch ausgeben   - except  DATEPICKER */
				if ($result->num_rows > 0) {
				 	echo "<tr>";
					 		

					for ($i=0; $i<sizeof($headers); $i++){ 
						if($i==0){//read only for id 
							?>
							<td> 
								<input name="feld<?php echo $i;?>" type="text" style="background:grey; color:black;" value= "<?php echo $row["$headers[$i]"]; ?> " size="20" readonly>
							</td>
							<?php
						 	}
						if($i==2 || $i== 3){//datepicker for dates TODO - enter datepicker logic Change submit fields - date 1 !
							?>
							<td> 
								<input type="text" id="datepicker<?php echo $i;?>" name="date<?php echo $i;?>" style="background:green; color:black;" value= "<?php echo $row["$headers[$i]"]; ?> " size="20">
							</td>
							<?php

						}
						else{ //normal field
							?>
							<td> 
								<input name="feld<?php echo $i;?>" type="text" value= "<?php echo $row["$headers[$i]"]; ?> " size="20">
							</td>
							<?php
						}
					} // end of for					
				}//end of if 
					
				?>
					<!-- Formularabschluss -->
					<tr>
						<td>
							<input type="submit" name="Submit" value="OK">	
							<input type="button" value="zur&uuml;ck zur Liste " onclick="load('ajax_article', '<?php echo $cancel_link?>');"> 		
						</td>
					</tr>
				</form>
			</table>
		</article>
	</body> 
</html> 
