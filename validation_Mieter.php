<?php
//ACHTUNG bei $_POST["feldx"] hat es ein Fehler! Index beginnt bei 1 zu zählen und nicht bei 0 (siehe Linie 16 für Testausgabe)
$validation = true;
$vorname = ucfirst($_POST["feld2"]); //vorname [ACHTUNG index i beginnt bei 1 und nicht bei 0!!!]
$nachname = ucfirst($_POST["feld3"]); //nachname [ucfirst()- schreibt ersten Buchstaben gross]
$email = $_POST["feld4"]; //email
$telefon = $_POST["feld5"]; // telefon


if (empty($_POST['feld2'] == true) OR empty($_POST['feld3'] == true) OR empty($_POST['feld4'] == true) OR empty($_POST['feld5'] == true)) {
    $err = "Bitte alle Felder ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $err  </font> </p>";
}

//echo $_POST['feld1'];  // Testausgabe um zu zeigen, dass Anrede bei 'feld1' beginnt und nicht bei 'feld0'!!!

if (!preg_match("/^[a-zA-Z -]+$/", $_POST['feld2'])) {
    $vornameErr = "Bitte Vorname korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $vornameErr  </font> </p>";
}

if (!preg_match("/^[a-zA-Z -]+$/", $_POST['feld3'])) {
    $nachnameErr = "Bitte Nachname korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $nachnameErr  </font> </p>";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Das ist keine g&uuml;ltige E-Mail-Adresse!";
    $validation = false;
    echo "<p><font color=\"red\"> $emailErr  </font> </p>";
}

if (!is_numeric($telefon)) {
    $telefonErr = "Bitte Telefonnummer korrekt ausf&uuml;llen!";
    $validation = false;
    echo "<p><font color=\"red\"> $telefonErr  </font> </p>";
}
?>

