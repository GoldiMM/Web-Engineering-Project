<?php
       session_start();
        // Session löschen
        session_unset();
        session_destroy();
        //Session-Array wird gelöscht
        unset($_SESSION);
        ?>


<html>
    <head>
        <link rel="stylesheet" href="mycss.css" type="text/css">
        <title>Online-Verwaltungstool f&uuml;r Mehrfamilienhaus</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
             
      
       
       
        <div class ="login" >
            <form action="homepage.php" method="GET">
            <h1> Online-Verwaltungstool f&uuml;r Mehrfamilienhaus </h1>
            <img src="house.jpg" class="picture1"> <br/> 
            <p>
            <table   align="center" >
                <tr>
                    <th colspan="2" align="left"> <h2>  Login </h2> </th>
                </tr>
                <tr>
                    <td> Benutzername </td>
                    <td> <input name="nickname" type="text"  size="15"> </td>
                </tr>
                <tr>
                    <td> Passwort: </td>
                    <td> <input name="password" type="password"  size="15"> </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"> <input type="submit" value="Login"> </td>
                </tr>
            </table>
            </form>
        </p>
        </div>
        
    </body>
</html>
