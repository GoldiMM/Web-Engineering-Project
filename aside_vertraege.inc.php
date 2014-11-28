<!-- INCLUDE FILE -->
        <aside>
            <table border="4" cellspacing="5pt" cellpadding="2pt" bgcolor="blue" class="navbar2">
                <tr> 
                    <td>
                        <a href="vertraege.php"><button type="button"> &Uuml;bersicht der Vertraege</button></a>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <a href="vertrag_new.php"><button type="button">Neuer Vertrag</button></a>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="button" value="Mieteingang buchen" onclick="load('ajax_article', 'book_vertraege.inc.php');"> 
                    </td>
                </tr>  
                <tr> 
                    <td>
                        <input type="button" value="Vertrag bearbeiten / entfernen " onclick="load('ajax_article', 'edit_vertraege.inc.php');"> 
                    </td>
                </tr>               
            </table>
        </aside>