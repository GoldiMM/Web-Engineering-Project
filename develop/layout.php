<?php
    // vorhandene Session aufnehmen
    session_start(); 
    //login check
    
        
?>

<html>
    <head>    
    <script type=\"text/javascript\">
        //AJAX
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
            </script>


        <title> Online-Verwaltungstool </title> 
        <link rel="stylesheet" href="mycss.css" type="text/css">  
    </head>
    <body>  
         <div id="adiv"></div>

    <?PHP

        
        include('homepage.header.inc.php');    
        include('nav.php');
        include('homepage.nav.inc.php');
        include('homepage.article.inc.php');
        include('homepage.footer.inc.php');
       

        /* example
        <div id="mydiv">Some content</div>
        <div id="mysignup"> <?php include('controller_signup.php'); ?></div>
        <div id="content"> The views main page content </div>


        other example
            <title>Untitled Document</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        </head>
        <body>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#dynamic").load("blasty.php");
        });
        </script>
        <div id="dynamic"></div>
        </div>
        </body>
        </html>
        
            */

    ?>             
    </body>    
</html>