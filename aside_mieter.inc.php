<!-- INCLUDE FILE -->
        <aside class="aside">
            <table border="4" cellspacing="5pt" cellpadding="2pt" bgcolor="blue" class="navbar2">
                <tr> 
                    <td>
                        <a href="mieter.php"><button type="button">&Uuml;bersicht der Mieter</button></a>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <a href="mieter_new.php"><button type="button">Neue Mieter</button></a>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <button type="button" onclick="load('ajax_article', 'edit_mieter.inc.php');"> Mieter bearbeiten / entfernen </button> 
                    </td>
                </tr>
                <tr> 
                    <td>
                        <button type="button" onclick="load('ajax_article', 'mieterspiegel.inc.php');"> Mieterspiegel </button> 
                    </td>
                </tr>                         
            </table>
        </aside>
