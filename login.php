<!-- PHP -->
<?php
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
?>

<!-- HTML - Login-Page -->
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
     alert("ACHTUNG: Ihr Passowrt muss mindestens 6 Zeichen haben!");
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
            
            <header> 
                <p>
                    Benutzername <input name="nickname" type="text" size="15"> 
                    Passwort: <input name="password" type="password" size="15"> 
                    <input type="submit" value="Login">
                </p> 
                <img class="picture2" src="house2.jpg" > 

            </header>

            <nav> &nbsp; </nav>

            <aside> &nbsp; </aside>

            <article>

                <h1 align="center"> Herzlich Willkommen auf der Seite Online-Verwaltungstool f&uuml;r Mehrfamilienhaus </h1>
                <p align="center"> <img  src="house.jpg" align="center"> <br/>
                    Bitte loggen Sie sich oben rechts ein! </p>

            </article>

            <?php
            include('footer.inc.php');
            ?>        
            </form>
       
    <body>
</html>
