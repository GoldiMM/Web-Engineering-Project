<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Mieteruebersicht',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('localhost','Cando','yes123');
mysql_select_db('hausverwaltung');

$pdf=new PDF();
$pdf->AddPage();
$mieter = ('SELECT * FROM mieter ');
//First table: put all columns automatically
$pdf->Table($mieter);



$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
