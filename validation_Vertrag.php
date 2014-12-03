<?php
//Variablen
$validation = true;
$miete = $_POST["feld1"]; 
$mietbeginn = $_POST['datum1']; 
$mietende = $_POST['datum2'];

if (empty($_POST['feld1'] == true) OR empty($_POST['datum1'] == true) ) {
    $err = "Bitte alle Felder ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $err  </font> </p>";
}

//Miete
if (!is_numeric($miete)) {
    $mieteErr = "Bitte Miete korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $mieteErr  </font> </p>";
}

//Mietbeginn
//$date_original = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
//$hiredate = '2013-14-04';
$date_soll = '/^(19|20)\d\d[\/](0[1-9]|1[012])[\/](0[1-9]|[12][0-9]|3[01])$/';

if (!preg_match($date_soll, $mietbeginn)) {
    $mietbeginnErr = "Bitte Datum vom Mietbeginn korrekt angeben!";
    $validation = false;
    echo "<p><font color=\"red\"> $mietbeginnErr  </font> </p>";
}

?>