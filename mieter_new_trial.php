<?php
    session_start();
    include('authorization.inc.php');
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Mieter </title>
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <?php 
            include('ajax.inc');
        ?>
    </head>
    <body>        
        <?php
        include('homepage.header.inc.php');    
        include('homepage.nav.inc.php');
        include('aside_mieter.inc.php');

        //__variables__
        $form_action = 'mieter_new.php';
        ?>

        <!-- UNIQUE CODE Mieter erfassen former new_mieter.article.. etc -->
        <article id="ajax_article"> 
            <body>
            <h1>Neuer Mieter</h1>
                <form action="<?php echo $form_action?>" method="POST">
                    <table border="1" class="userinput">  
                        <th> Anrede </th>                      
                            <div><select name="feld1">
                                <option value="Frau">Frau</option>
                                <option value="Herr">Herr</option>
                                </select>
                            </div>
                        <th> Vorname </th> 
                            <div>
                                <input type="text" name="feld2">
                            </div>
                        <th> Nachname </th> 
                            <div>
                                <input type="text" name="feld3">
                            </div>
                        <th> E-Mail </th> 
                            <div>
                                <input type="text" name="feld4">
                            </div>
                        <th> Telefon </th> 
                            <div>
                                <input type="text" name="feld5">
                            </div>
                    </table>
                    <br/>
                    <input type="submit" name="submit" value="erfassen">                    
                </form>
            
            <!-- START Validation [MM] -->
            <?php
            $validation = false;
            if (isset($_POST['submit'])) {
            include ('validation_Mieter.php');
            }
            ?>
            <!-- END Validation [MM] -->

            <?php
            if ($validation == true) {
                include ('db_Cando.inc.php');
                if (isset($_POST['submit'])){
                    $sql = "INSERT INTO Mieter (Anrede, Vorname, Nachname, Email, Telefon)
                            VALUES ('$_POST[feld1]','$_POST[feld2]', '$_POST[feld3]','$_POST[feld4]', '$_POST[feld5]')";
                    $conn->multi_query($sql);
                
                    // _________________________display mieter ___________________
                    echo ("<h3> Neuer Datensatz erfasst Mieter: ".$_POST['feld1']." ". $_POST['feld2']." ".$_POST['feld3']."</h3>");
                } //end of isset
            }
            
                //__ display updated list  
                //variables__
                $pagename = 'Mieterliste';
                $tablename = 'Mieter';
                include('display.inc.php');    
            
            ?>
        </article>

        <?php
            include('homepage.footer.inc.php');
        ?>
   </body>    
</html>