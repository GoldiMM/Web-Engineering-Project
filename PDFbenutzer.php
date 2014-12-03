<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Benutzeruebersicht',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('mysql.hostinger.de','u947198430_user','yes123');
mysql_select_db('u947198430_db');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT Benutzer_ID, Benutzername FROM `benutzer`');
//$pdf->AddPage();
//Second table: specify 3 columns
//$pdf->AddCol('Anrede',40,'','C');
//$pdf->AddCol('Vorname',40,'Vorname','C');
//$pdf->AddCol('Nachname',40,'Nachname','C');
//$prop=array('HeaderColor'=>array(255,150,100),
			//'color1'=>array(210,245,255),
			//'color2'=>array(255,255,210),
			//'padding'=>2);
//$pdf->Table('SELECT * FROM `mieter` limit 0,10',$prop);

//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 


$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
