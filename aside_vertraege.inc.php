<!-- INCLUDE FILE -->
        <aside class="aside">
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
                        <button type="button" onclick="load('ajax_article', 'edit_vertraege.inc.php');"> Vertrag bearbeiten / entfernen</button> 
                    </td>
                </tr>      
                <tr> 
                    <td>
                        <button type="button" onclick="load('ajax_article', 'book_vertraege.inc.php');"> Mieteingang buchen   </button>
                    </td>
                </tr>  
                         
            </table>
        </aside>