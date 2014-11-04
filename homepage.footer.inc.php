<?php
//sofern der Benutzer eingeloggt ist
if ($_SESSION['eingeloggt'] == true) {
    echo "
        <footer> 
        Web-Engineering Project, &copy;Fabio Bally, Aurelia Erhardt, Marco Mangold 
        </footer>
";
    
    
}

//sofern der Benutzer nicht eingeloggt ist
    if ($_SESSION['eingeloggt'] == false) { 
    echo "
        <footer> 
        &nbsp; 
        </footer>
";             
    }

?>

