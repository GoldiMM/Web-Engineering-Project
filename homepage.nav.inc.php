<?php
//sofern der Benutzer eingeloggt ist
if ($_SESSION['eingeloggt'] == true) {
echo "
    <nav> 
	<table border=\"5\" cellspacing=\"9pt\" cellpadding=\"5pt\" bgcolor=\"yellow\" class=\"navbar\">
            <tr>
		<td id=\"menu1\" onmouseover=\"angewaehlt(1)\" onmouseout=\"weg(1)\"> <a href=\"homepage.php\">  Home </a></td>
		<td id=\"menu2\" onmouseover=\"angewaehlt(2)\" onmouseout=\"weg(2)\"> <a href=\"homepage_b.php\"> Mieter  </a></td>
                <td id=\"menu3\" onmouseover=\"angewaehlt(3)\" onmouseout=\"weg(3)\"> <a href=\"#\"> Wohnungen </a></td>
		<td id=\"menu4\" onmouseover=\"angewaehlt(4)\" onmouseout=\"weg(4)\"> <a href=\"#\"> Vertr&auml;ge  </a> </td>
                <td id=\"menu5\" onmouseover=\"angewaehlt(5)\" onmouseout=\"weg(5)\"> <a href=\"#\"> Rechnungen  </a> </td>
                <td id=\"menu6\" onmouseover=\"angewaehlt(6)\" onmouseout=\"weg(6)\"> <a href=\"homepage_f.php\"> Benutzer  </a> </td>
            </tr>
	</table>
    </nav>

    <script type=\"text/javascript\">

        // Funktion wird ausgefuehrt wenn Maus weg-faehrt
	function angewaehlt(x) {
            if(x==1) {
		document.getElementById(\"menu1\").bgColor=\"white\";
                     }
            else if(x==2) {
		document.getElementById(\"menu2\").bgColor=\"white\";
			  }
            else if(x==3) {
		document.getElementById(\"menu3\").bgColor=\"white\";
			  }
            else if(x==4) {
		document.getElementById(\"menu4\").bgColor=\"white\";
			  }
            else if(x==5) {
		document.getElementById(\"menu5\").bgColor=\"white\";
			  }
            else if(x==6) {
		document.getElementById(\"menu6\").bgColor=\"white\";
			  }
	}

	//Funktion wird ausgefuehrt wenn Maus weg-faehrt
	function weg(x){
            if (x==1) {
		document.getElementById(\"menu1\").bgColor=\"yellow\";
                      }
            else if(x==2) {
		document.getElementById(\"menu2\").bgColor=\"yellow\";
			  }
            else if(x==3) {
                document.getElementById(\"menu3\").bgColor=\"yellow\";
			  }
            else if(x==4) {
		document.getElementById(\"menu4\").bgColor=\"yellow\";
			  }
            else if(x==5) {
		document.getElementById(\"menu5\").bgColor=\"yellow\";
			  }
            else if(x==6) {
		document.getElementById(\"menu6\").bgColor=\"yellow\";
			  }
	}
    </script>
    ";   
}
    
//sofern der Benutzer nicht eingeloggt ist
if ($_SESSION['eingeloggt'] == false) {
echo "
    <nav> &nbsp; </nav>
     ";
}

?>
