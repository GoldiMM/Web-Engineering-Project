<!-- PHP -->
<?php
// vorhandene Session aufnehmen
session_start();

?>
<!-- PHP -->

<!-- HTML -->
<html>
    <head> 
        <title> Online-Verwaltungstool </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css"> 
        <!-- javaScript -->
        <script type="text/javascript">
            //<!-- Ajax -->
            function load(thediv, thefile){
                if (window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }
                else {
                    //other browsers handling style
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                // checking statechange correctness of code
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4  && xmlhttp.status == 200){
                        //trigger here to insert php data into div file.
                        document.getElementById(thediv).innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open('GET', thefile,true);
                xmlhttp.send();
            }
            //<!-- end of Ajax -->
        </script> 
    </head>

    <body>        
        <?php
        include('homepage.header.inc.php');        
        include('homepage.nav.inc.php');
        //include('homepage_f.aside.inc.php');                    
        //include('homepage_f.article.inc.php');
        ?>

        <aside>
            <table border="4" cellspacing="5pt" cellpadding="2pt" bgcolor="blue" class="navbar2">
                <tr> 
                    <td>
                        <input type="button" value="&Uuml;bersicht der Benutzer" onclick="load('ajax_article', 'disp_benutzer.article.inc.php');"> 
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="button" value="Neue Benutzer erfassen" onclick="load('ajax_article', 'new_benutzer.article.inc.php');"> 
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="button" value="Benutzer bearbeiten" onclick="load('ajax_article', 'edit_benutzer.article.inc.php');"> 
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="button" value="Benutzer l&ouml;schen" onclick="load('ajax_article', 'edit_benutzer.article.inc.php');"> 
                    </td>
                </tr>
            </table>
        </aside>

        <article id="ajax_article"> Choose a funtion - on the left </article>

        <?php
        include('homepage.footer.inc.php');
        


             //Zugriffs-Begrenzung: 
    if(!isset($_SESSION['benutzername'])){ //if login in session is not set redirect to 404 page
        header("Location: http://localhost/Web-Engineering-Project/unauthorized.php");
    }    ?>
    </body>
    
</html>

