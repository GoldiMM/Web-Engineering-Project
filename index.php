<!-- PHP 
Startseite des Benutzers. Hier kann der Benutzer zum Online Verwaltungstool einloggen
Es wird eine Session gestartet und bisherige Sessions werden gelöscht

Mit dem JavaScript wird der Benutzereingabe vom Passwort kontrolliert 
    /*
    if(isset($_GET['killSession'])){
        session_destroy();
        print_r($_SESSION);
    }
    else {
    //Eine Session starten
    // Löschen aller Session-Variablen, somit können wir ein 
    // Logout auf diese Seite lenken
    //$_SESSION = array();
    /*
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }
    }
       //Eine Session starten
    session_start();

    // Löschen aller Session-Variablen, somit können wir ein 
    // Logout auf diese Seite lenken
    $_SESSION = array();

    // Falls die Session gelöscht werden soll, löschen Sie auch das Session-Cookie.
    // Achtung: Damit wird die Session gelöscht, nicht nur die Session-Daten!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }

    // Zum Schluß, löschen aller Daten der Session.
    session_destroy();
    */
-->
<?php
    session_start();
    print_r($_SESSION);
?>

<!-- HTML - index ist die Login-Page -->
<html>
    <head>
        <title>Online-Verwaltungstool</title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
        
        <!-- Java-Script -->
        <script type="text/javascript">
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
            
            <?php
            include('index.article.inc.php');
            ?>

            <?php
            include('index.footer.inc.php');
            ?>        
        </form> 
    </body>
</html>

        
        
                