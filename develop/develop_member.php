<?php
	
	session_start();

	if ($_SESSION['Benutzername']) {
		echo "all good - you are in !"; 
	}
	else {
		die ("non authorized for this area");
		echo "<a href='develop_login.php'>Login</a>"; 
	}
?>	