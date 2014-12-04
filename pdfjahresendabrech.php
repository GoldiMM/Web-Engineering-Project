<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Jahresendabrechnung',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('mysql.hostinger.de','u947198430_user','yes123');
mysql_select_db('u947198430_db');

$pdf=new PDF('L');
$pdf->AddPage();
$wasser = ("SELECT Kategorie, SUM(Betrag) AS Kosten
            FROM Rechnungen
            GROUP BY Kategorie
            ");
$total = ("SELECT SUM(Betrag) AS Totalnebenkosten
            FROM Rechnungen
            " );
//First table: put all columns automatically
$pdf->Table($wasser);
$pdf->Table($total);

//$pdf->AddPage();
//Second table: specify 3 columns
//$pdf->AddCol('Kategorie',40,'','C');
//$pdf->AddCol('Betrag',40,'','C');
//$prop=array('HeaderColor'=>array(255,150,100),
			//'color1'=>array(210,245,255),
			//'color2'=>array(255,255,210),
			//'padding'=>2);
//$pdf->Table('SELECT Kategorie, SUM(Betrag) FROM `rechnungen` WHERE Kategorie =\'Wasser\'',$prop);


//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 


$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
