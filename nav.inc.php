<?php

echo '
<nav> 
<table border="5" cellspacing="9pt" cellpadding="5pt" bgcolor="yellow" class="navbar">
<tr>
<td id="menu1" onmouseover="angewaehlt(1)" onmouseout="weg(1)"> <a href="#">  Menupunkt 1  </a> </td>
<td id="menu2" onmouseover="angewaehlt(2)" onmouseout="weg(2)"> <a href="#"> Menupunkt 2  </a></td>
<td id="menu3" onmouseover="angewaehlt(3)" onmouseout="weg(3)"> <a href="#"> Menupunkt 3 </a></td>
<td id="menu4" onmouseover="angewaehlt(4)" onmouseout="weg(4)"> <a href="#"> Menupunkt 4 </a> </td>
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
