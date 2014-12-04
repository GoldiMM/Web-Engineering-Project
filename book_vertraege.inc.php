<?php
    session_start();
    include('authorization.inc.php');

    //__variables__
    $pagename = 'Mieteingang buchen';
    $tablename = 'Mietvertraege';  
    $form_action = 'vertrag_book.php';
    $cancel_link = 'vertraege.php';

    //$form_action = 'vertrag_new.php';
    //$old_form_action = 'new_vertrag.article.inc.php';

    //__db queries for dropdown lists
    include ('db_Cando.inc.php');
    $sqlmieter = "SELECT Mieter_ID, Nachname, Vorname FROM Mieter";
    $result = $conn->query($sqlmieter);
    if($result === FALSE) {
        die(mysql_error()); 
    }
?>
    <!--   UNIQUE CODE  because of foreign keys drop-down lists -->
        <h1>Mietvertrag erfassen</h1>
            <form action="<?php echo $form_action?>" method="POST">
                    <fieldset>
                        <legend>Mieteingang buchen </legend>
                        <label>Mieter ausw&auml;hlen:  </label> 
                        <select name="m_id">
                            <?php
                                if ($result->num_rows > 0) {
                                    //________output data Mieter from DB as dropdown-item _______
                                    while($row = $result->fetch_assoc()) {
                                        $dropdownID =        $row["Mieter_ID"];
                                        $dropdownNachname =  $row["Nachname"];
                                        $dropdownVorname =   $row["Vorname"];
                                        echo '<option value="'.$dropdownID.'">'. $dropdownVorname."  ".$dropdownNachname." ID. ".$dropdownID.'</option>';
                                        }
                                    } 
                                    else {
                                        echo "Keine Daten vorhanden";
                                }                           
                            ?>
                        </select>                 
                    </fieldset>
                <br/>
                <input type="submit" name="submit" value="Datensatz suchen"> 
                <input type="button" value="beenden " onclick="load('ajax_article', '<?php echo $cancel_link?>');"> 	
            </form>
