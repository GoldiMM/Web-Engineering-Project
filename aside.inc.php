<!-- 
In dieser Klasse wird die Navigationsbar an der linken Seite gesteuert.
Die Menupunkte heissen jeweils option1, option2, usw.
---->
<?php

echo '
    <aside>
<table border="5" cellspacing="9pt" cellpadding="5pt" bgcolor="yellow" class="navbar2">
<tr>
<td id="option1" onmouseover="angewaehlt2(1)" onmouseout="weg2(1)"> <a href="#">  Benutzer erfassen </a> </td>
</tr>
<tr>
<td id="option2" onmouseover="angewaehlt2(2)" onmouseout="weg2(2)"> <a href="#"> Option2 </a> </td>
</tr>
<tr>
<td id="option3" onmouseover="angewaehlt2(3)" onmouseout="weg2(3)"> <a href="#"> Option3 </a></td>
</tr>
<tr>
<td id="option4" onmouseover="angewaehlt2(4)" onmouseout="weg2(4)"> <a href="#"> Option4 </a> </td>
</tr>
</table>
</aside>

<script type="text/javascript">

//Funktion wird ausgefuehrt wenn Maus darueber fährt
function angewaehlt2(x) {
if(x==1) {
document.getElementById("option1").bgColor="white";
}
else if(x==2) {
document.getElementById("option2").bgColor="white";
}
else if(x==3) {
document.getElementById("option3").bgColor="white";
}
else if(x==4) {
document.getElementById("option4").bgColor="white";
}
}

//Funktion wird ausgefuehrt wenn Maus weg-faehrt
function weg2(x)
{
if (x==1) {
document.getElementById("option1").bgColor="yellow";
}
else if(x==2) {
document.getElementById("option2").bgColor="yellow";
}
else if(x==3) {
document.getElementById("option3").bgColor="yellow";
}
else if(x==4) {
document.getElementById("option4").bgColor="yellow";
}
}
</script>

';

?>
