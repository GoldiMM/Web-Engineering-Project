<?PHP
	include("PDF_Generator\\fpdf.php");   //    \\Pfad zu fpdf.php 

	//PDF erstellen
	$pdf = new FPDF();  
	$pdf->AddPage();

	//Titel definieren inklusive Schriftart, -staerke, -groesse
	$pdf->SetFont('Arial', 'B', 24);   //''=normal  'B'=bild  'I'=kursiv  'U'=unterstrichen
	// Textfarbe nach RGB-Farbschema rot gruen blau bestimmen
	$pdf->SetTextColor(0,0,0);
	// Parameter 1,2->Startposition, 3->Text, 4->Rand, 5->Schreibpostiton nach der Zelle  
	$pdf->Cell(40,10,'Dies ist der schwarze Titel!',0,1);

	//Text definieren inklusive Schriftart, -staerke, -groesse
	$pdf->SetFont('Arial','', 12);
	// Textfarbe auf blau wechseln
	$pdf->SetTextColor(0,0,255);

	//Text schreiben
	$text = "Jetzt folgt ein langer Text, der einen Zeilenumbruch erfordert, "
	        . "damit der Text auch lesbar bleibt. Dies muss mit der Methode Write() "
	        . "geloest werden, welche einen automatischen Zeilenumbruch einfuegt, "
	        . "wenn dies noetig wird.";

	//ins PDF schreiben
	$pdf->Write(5, $text); // 5 bedeutet Zeilenabstand
	$pdf->Output("Dokument.pdf", "D"); // D steht für Download    
?>
