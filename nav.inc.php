<?php

echo '
<nav>    
<table border="1" bgcolor="yellow">
<tr>
<td id="menu1" onmouseover="angewaehlt(1)" onmouseout="weg(1)"> <a href="#"> &nbsp;&nbsp;&nbsp; Menupunkt 1 &nbsp;&nbsp;&nbsp; </a> </td>
<td id="menu2" onmouseover="angewaehlt(2)" onmouseout="weg(2)"> <a href="#">&nbsp;&nbsp;&nbsp; Menupunkt 2 &nbsp;&nbsp;&nbsp; </a></td>
<td id="menu3" onmouseover="angewaehlt(3)" onmouseout="weg(3)"> <a href="#">&nbsp;&nbsp;&nbsp; Menupunkt 3 &nbsp;&nbsp;&nbsp; </a></td>
<td id="menu4" onmouseover="angewaehlt(4)" onmouseout="weg(4)"> <a href="#">&nbsp;&nbsp;&nbsp; Menupunkt 4 &nbsp;&nbsp;&nbsp;</a> </td>
</tr>
</table>
</nav>

<script type="text/javascript">

// Funktion wird ausgefuehrt wenn Maus weg-faehrt
function angewaehlt(x) {
if(x==1) {
document.getElementById("menu1").bgColor="white";
}
else if(x==2) {
document.getElementById("menu2").bgColor="white";
}
else if(x==3) {
document.getElementById("menu3").bgColor="white";
}
else if(x==4) {
document.getElementById("menu4").bgColor="white";
}
}

//Funktion wird ausgefuehrt wenn Maus weg-faehrt
function weg(x){
if (x==1) {
document.getElementById("menu1").bgColor="yellow";
}
else if(x==2) {
document.getElementById("menu2").bgColor="yellow";
}
else if(x==3) {
document.getElementById("menu3").bgColor="yellow";
}
else if(x==4) {
document.getElementById("menu4").bgColor="yellow";
}
}

</script>
';

?>

