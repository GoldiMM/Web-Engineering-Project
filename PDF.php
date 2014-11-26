<?php
//include fpdf
require('PDF_Generator\\fpdf.php');
//include DB
mysql_connect('localhost','Cando','yes123');
mysql_select_db('hausverwaltung');

//globals
$wasser = (double)('SELECT Kategorie, SUM(Betrag) FROM `rechnungen` WHERE Kategorie =\'Wasser\'');
//create PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$wasser);
$pdf->Cell(40,10,'Hello World !');
$pdf->Output();
?>