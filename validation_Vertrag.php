<?php
//Variablen
$validation = true;
$miete = $_POST["feld1"]; 
$mietbeginn = $_POST['datum1']; // $_POST['datum1'];

if (empty($_POST['feld1']) || empty($_POST['datum1']) ) {
    $err = "Bitte alle Felder ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $err  </font> </p>";
}

//Miete
if (!is_numeric(trim($miete))) {
    $mieteErr = "Bitte Miete korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $mieteErr  </font> </p>";
}

//Mietbeginn
//$date_original = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
//$hiredate = '2013-14-04';
$date_soll = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';

if (!preg_match($date_soll, trim($mietbeginn))) {
    $mietbeginnErr = "Bitte Datum vom Mietbeginn korrekt angeben!";
    $validation = false;
    echo "<p><font color=\"red\"> $mietbeginnErr  </font> </p>";
}

?>