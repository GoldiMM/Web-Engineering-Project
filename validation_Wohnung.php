<?php
//Variablen
$validation = true;
$stockwerk = ucfirst($_POST["feld1"]); 
$adresse = ucfirst($_POST["feld2"]); 
$postleitzahl = $_POST["feld3"];
$ort = $_POST["feld4"]; 
$quadratmeter = $_POST["feld5"]; 
$zimmer = $_POST["feld6"]; 


if (empty($_POST['feld1'] == true) OR empty($_POST['feld2'] == true) OR empty($_POST['feld3'] == true) OR empty($_POST['feld4'] == true)
        OR empty($_POST['feld5'] == true) OR empty($_POST['feld6'] == true)) {
    $err = "Bitte alle Felder ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $err  </font> </p>";
}

//Stockwerk
if (!is_numeric(trim($stockwerk))) {
    $stockwerkErr = "Bitte Stockwerk korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $stockwerkErr  </font> </p>";
}

//Adresse
if ( !preg_match("/^[a-zA-Z0-9 -]+$/", trim($adresse))  ) {
    $adresseErr = "Bitte Adresse korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $adresseErr  </font> </p>";
}

//Postleitzahl
if ( !((is_numeric(trim($postleitzahl))) && (strlen(trim($postleitzahl)) == 4))      ) {
    $postleitzahlErr = "Bitte Postleitzahl korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $postleitzahlErr  </font> </p>";
}

//Ort 
if (!preg_match("/^[a-zA-Z -]+$/", trim($ort))) {
    $ortErr = "Bitte Ort korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $ortErr  </font> </p>";
}

//Quadratneter
if (!is_numeric(trim($quadratmeter))) {
    $quadratmeterErr = "Bitte Quadratmeter korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $quadratmeterErr  </font> </p>";
}

//Zimmer
if (!is_numeric(trim($zimmer))) {
    $zimmerErr = "Bitte Zimmer korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $zimmerErr  </font> </p>";
}

?>

