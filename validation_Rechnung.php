<?php
$validation = true;
$betrag = $_POST["feld1"]; 
$datum = $_POST["feld2"];
$lieferant = $_POST["feld4"]; 


//Check Alle Felder
if (empty($_POST["feld1"]) || empty($_POST["feld2"]) || empty($_POST["feld4"]) ) {
    $err = "Bitte alle Felder ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $err  </font> </p>";
}

//Check Feld Betrag
if (!is_numeric(trim($betrag))) {
    $betragErr = "Bitte Betrag korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $betragErr  </font> </p>";
}


//Check Feld Datum
//$date_original = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
//$hiredate = '2013-14-04';
$date_soll = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';

if (!preg_match($date_soll, trim($datum))) {
    $datumErr = "Bitte Datum korrekt angeben!";
    $validation = false;
    echo "<p><font color=\"red\"> $datumErr  </font> </p>";
}


//Check Feld Lieferant
if ( !preg_match("/^[a-zA-Z0-9 -]+$/", trim($lieferant))  ) {
    $lieferantErr = "Bitte Lieferant korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $lieferantErr  </font> </p>";
}


?>
