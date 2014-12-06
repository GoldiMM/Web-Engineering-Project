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
        <article id="ajax_article" class="article"> 
            <body>
            <h1>Mieter erfassen</h1>
                <form action="<?php echo $form_action?>" method="POST">
                    <fieldset>
                        <legend>Neuer Mieter </legend>
                        <select name="feld1">
                            <option value="Frau">Frau</option>
                            <option value="Herr">Herr</option>
                        </select>
                        <label>Vorname :    <input type="text" name="feld2">    </label> 
                        <label>Nachname:    <input type="text" name="feld3">    </label>
                        <label>E-Mail:      <input type="text" name="feld4">    </label>
                        <label>Telefon:     <input type="text" name="feld5">    </label>
                    </fieldset>
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