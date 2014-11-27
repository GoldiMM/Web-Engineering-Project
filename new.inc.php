<?php  //___ INCLUDE FILE _ 

        //__generic query__
        include ('db_Cando.inc.php');
        $sql = "SELECT * FROM $tablename"; 
        $result = $conn->query($sql);
      
        echo"<br>";
            echo "<table border=\"1\">";
                echo '<form action="'.$form_action.'" method="POST">';

                    /* Tabellenkopf dynamisch ausgeben */
                    $fields = mysqli_fetch_fields($result);
                    $headers = array();
                    foreach ($fields as $field) {
                        $headers[] = $field->name;
                        echo "<th>". $field->name . "</th>\n";
                    }
                    echo "</tr>\n";

                    /* Eingabefelder dynamisch erstellen */
                    echo "<tr>";
                        for ($i=0; $i<sizeof($headers); $i++){ 
                            ?>
                            <td> 
                                <input name="feld<?php echo $i;?>" type="text"  value= "" size="20">
                            </td>
                        <?php
                        } // end of for

                    /* Formularabschluss */
                    echo "<tr>";
                        echo "<td>";
                            echo '<input type="submit" name="submit" value="Daten erfassen">';          
                        echo "</td>";
                    echo "</tr>";
                echo "</form>";
            echo "</table>";
?>