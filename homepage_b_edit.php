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
        include('homepage_b.aside.inc.php');
        include('homepage.footer.inc.php');
        //include('edit_mieter.article.inc.php'); 
        ?>

        <article id="ajax_article">this text will be replaced by ajax</article>         
        <input type="button" value="include edit mieter" onclick="load('ajax_article', 'edit_mieter.article.inc.php');">
    </body>
    
</html>
