<?php
	session_start();
	session_destroy();
	

	// Falls die Session gelöscht werden soll, löschen Sie auch das Session-Cookie.
	 if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }
?>

<!-- logout -Page -->
<html>
    <head>
        <title>Online-Verwaltungstool</title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
        
        <!-- Java-Script -->
        <script type="text/javascript">
            <!--
                function checkLogin() {
                        var laenge = document.formLogin.password.value.length;
                      
                    if (laenge < 6 ) {
                        alert("ACHTUNG: Ihr Passwort muss mindestens 6 Zeichen haben!");
                        document.formLogin.password.focus();
                        return false;
                    }
                    
                    if (laenge > 32) {
                        alert("ACHTUNG: Ihr Passwort ist zu lang!");
                        document.formLogin.password.focus();
                        return false;   
                    }    
                }
        </script>
        
        <noscript>
                 Sie haben JavaScript deaktiviert. Bitte aktivieren Sie JavaScript.
        </noscript>
    
    </head>

    <body>
    	
        <form name="formLogin" onsubmit="return checkLogin()" action="homepage.php" method="POST">
            <?php
            include('index.header.inc.php');
            ?>
            
            <nav> &nbsp; </nav>
            
            <aside> &nbsp; </aside>
            <article>
            	<h1>  Unauthorisierter Zugriff -> <a href='index.php'> bitte einloggen   </a><h1>
           	</article>
            

            <?php
            include('index.footer.inc.php');
            ?>        
        </form> 
    </body>
</html>

        
        
                