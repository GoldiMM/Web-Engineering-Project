<?php
    session_start();

?>
<html>
    <head>
        <link rel="stylesheet" href="mycss.css" type="text/css">
        <title>Online-Verwaltungstool f&uuml;r Mehrfamilienhaus</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="content">
        <?php
        if (isset($_GET['nickname']) AND isset($_GET['password'])) {
            if($_GET['nickname']=="admin" AND
                    $_GET['password']=="root")
            {
                $_SESSION['eingeloggt']=true;
                echo "<br/><a href=\"homepage.php\"> Hallo MR. X</a>";
            }
            else{
                $_SESSION['eingeloggt']=false;
                header("Location:login.php");
            }
        }
        
        ?>

        
        <ul class="navbar1">
            <li class="topmenu"> <a href="#" >Menupunkt1 </a>
                <ul>
                    <li class="submenu"><a href="#">Option1</a></li>
                    <li class="submenu"><a href="#">Option2</a></li>
                    <li class="submenu"><a href="#">Option3</a></li>
                </ul>
            </li>

            <li class="topmenu"> <a href="#" >Menupunkt2 </a>
                <ul>
                    <li class="submenu"><a href="#">Option1</a></li>
                    <li class="submenu"><a href="#">Option2</a></li>
                    <li class="submenu"><a href="#">Option3</a></li>
                </ul>
            </li>

            <li class="topmenu"> <a href="#" >Menupunkt3 </a>
                <ul>
                    <li class="submenu"><a href="#">Option1</a></li>
                    <li class="submenu"><a href="#">Option2</a></li>
                    <li class="submenu"><a href="#">Option3</a></li>
                </ul>
            </li>

            <li class="topmenu"> <a href="#" > Logout </a>
                
            </li>

        </ul>




        <img src="house2.jpg" class="picture2">


        <ul class="navbar2">
            <li> Menuname1</li>
            <li> Option1</li>
            <li> Option2</li>
            <li> Option3</li>
            <li> Option4</li>
        </ul>

        <div class ="main">
            MAIN 
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>

        </div>

        <div class="foot">
            Web-Engineering Project, &copy;Fabio Bally, Aurelia Erhardt, Marco Mangold
        </div>

    </body>
</html>
