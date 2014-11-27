<!-- INCLUDE FILE -->
<?php 
	//Zugriffs-Begrenzung: 
    if(!isset($_SESSION['benutzername'])){ //if login in session is not set redirect to 404 page
	      header("Location: http://localhost/Web-Engineering-Project/unauthorized.php");
    }    
?>