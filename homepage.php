<!-- PHP -->
<?php
// vorhandene Session aufnehmen
session_start();

if (isset($_POST['nickname']) AND isset($_POST['password'])) {
    if ($_POST['nickname'] == "admin" AND $_POST['password'] == "root1234") {
        // zwei Session-Variablen setzen
        $_SESSION['nickname'] = $_POST['nickname'];
        $_SESSION['eingeloggt'] = true;
                       

        //Falls Passwort ungültig ist
    } else {
        echo "ung&uuml;ltige Eingabe!";
        $_SESSION['eingeloggt'] = false;
        echo "<a href=\"login.php\"> zur&uuml;ck zur Login-Seite </a>";
    }
}

//sofern der Benutzer eingeloggt ist
if ($_SESSION['eingeloggt']==true) {
 echo "
  
  <!-- HTML -->
  <html>
  <head> 
  <title> Online-Verwaltungstool </title>
  <link rel=\"stylesheet\" href=\"mycss.css\" type=\"text/css\">  
  </head>
        
      <body>
      <form action=\"login.php\" method=\"POST\">
  <header> 
  <p> Sie sind eingeloggt als <b> $_SESSION[nickname] </b> 
  <input type=\"submit\" value=\"Logout\">
  </p>
  <img class=\"picture2\" src=\"house2.jpg\" > 
  </header>
";

        include('nav.inc.php');

        echo "
<aside>&nbsp; </aside>            

<article>

<p> Hallo <b> $_SESSION[nickname] </b> <br/> 
Herzlich Willkommen auf Deinem eigenen Online-Verwaltungstool f&uuml;r Mehrfamilienh&auml;user. <br/>
<br/>
Bitte bediene das Navigationsmen&uuml;, um Deine Vermieter und Liegenschaften zu verwalten<br/>
Hier eine kleine Auflistung der wichtigsten Men&uuml;punkte:
<br/> 
<br/>
<b> Menupunkt1 </b> <br/>
(kurze Erklarung)
<br/>
<br/>
<b> Menupunkt2 </b> <br/>
(kurze Erklarung) <br/>
<br/>
usw.

</p>
</article>
";

        include('footer.inc.php');

        echo "
   </form>
</body>
</html> 
  ";
} 

?>
