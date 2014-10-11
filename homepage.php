<?php

// vorhandene Session aufnehmen
session_start();

if (isset($_POST['nickname']) AND isset($_POST['password'])) {
    if ($_POST['nickname'] == "admin" AND $_POST['password'] == "root1234") {
        // zwei Session-Variablen setzen
        $_SESSION['nickname'] = $_POST['nickname'];
        $_SESSION['eingeloggt'] = true;

        echo '
  <!-- Home-Page -->
  <html>
  <head> 
  <title> Online-Verwaltungstool </title>
  <link rel="stylesheet" href="mycss.css" type="text/css">  
  </head>
  ';
        //Nickname zwischenspeichern
        $nick = $_POST['nickname'];


        echo "
      <form action=\"login.php\" method=\"POST\">
      <body>
  <header> 
  <p> Sie sind eingeloggt als $nick 
  <input type=\"submit\" value=\"Logout\">
  </p>
  <img class=\"picture2\" src=\"house2.jpg\" > 
  </header>
";

        include('nav.inc.php');
        include('aside.inc.php');

        echo '
<article>

<p> Hier kommen die Ausfuehrungen mit Formularen usw. !!!
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

</article>
';

        include('footer.inc.php');

        echo "
    </form>
</body>
</html> 
  ";
    } else {
        echo "ung&uuml;ltige Eingabe!";
        $_SESSION['eingeloggt'] = false;
        echo "<a href=\"login.php\"> zur&uuml;ck zur Login-Seite </a>";
    }
}
?>
