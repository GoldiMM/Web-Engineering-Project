<?php
session_start();
?>

<html>
    <head> 
        <title> Online-Verwaltungstool | Benutzer </title> 
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
        //__variables__
        $pagename = 'Neuer Benutzer';
        $tablename = 'Benutzer';

        include('homepage.header.inc.php');        
        include('homepage.nav.inc.php');
        include('aside_benutzer.inc.php');        
        ?>

        <article id="ajax_article">
            <?php  // nach POST & SUBMIT aus new_Benutzer.article inc 
                if (isset($_POST['submit'])){
                    echo "isset OK";

                    //db connect
                    include ('db_Cando.inc.php');

                    //__variable SQL statment__
                    $sql = "INSERT INTO $tablename (Benutzername,Passwort)
                            VALUES ('$_POST[feld1]','$_POST[feld2]')";

                    //__generic db connection__
                    $result = $conn->query($sql);
                    if($result === FALSE) { die(mysql_error()); }
                    else { echo "dynamic update done"; }

                    //__generic query__ 
                    $sqlSelect = "SELECT * FROM $tablename"; 
                    $result = $conn->query($sqlSelect);

                    //__display__
                    echo "<table border=\"1\">";
                        // Headers - dynamisch ausgeben //
                                $fields = mysqli_fetch_fields($result);
                                $headers = array();
                                foreach ($fields as $field) {
                                    $headers[] = $field->name;
                                    echo "<th>". $field->name . "</th>\n";
                                }
                                echo "</tr>\n";

                        // Rows - dynamisch ausgeben //
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                    for ($i=0; $i<sizeof($headers); $i++){
                                        echo  "<td>". $row["$headers[$i]"]."</td>";
                                    }                   
                                echo "</tr>";      
                                }
                            } 
                            else {
                                    echo "0 results";
                            }
                        echo "</br>";   
                    echo "</table>";
                    echo"</body>";
                } //end of isset POST submit                
            ?>

         </article>

        <?php
            include('homepage.footer.inc.php');
            
            //Zugriffs-Begrenzung: 
            if(!isset($_SESSION['benutzername'])){ //if login in session is not set redirect to 404 page
                header("Location: http://localhost/Web-Engineering-Project/unauthorized.php");
            }
        ?>
   </body>    
</html>

