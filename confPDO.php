<?php

#################### Erstellung eines PDO ####################
$host = 'mysql:host=mysql.hostinger.de;u947198430_db';
$user = 'u566874539_user';
$pass = 'yes123';
    
try {
    $dbh = new PDO($host, $user, $pass);
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();   
    }
    
?>