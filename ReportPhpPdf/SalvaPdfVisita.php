<?php
session_start();
$DATA=$_GET['DATA'];
$SPECIALIZZAZIONE=$_GET['SPECIALIZZAZIONE'];
$TIPOVISITA=$_GET['TIPOVISITA'];
$IDPAZIENTE=$_SESSION['iduser'];

include('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('Titolo.JPG',14,3,180);
$pdf->cell(33,100,'DATA: '.$DATA.'',0,1,'C');
$pdf->cell(33,10,'TIPOVISITA: '.$TIPOVISITA.'',0,1,'C');
$pdf->cell(33,5,'SPECIALIZZAZIONE: '.$SPECIALIZZAZIONE.'',0,1,'C');
$pdf->Output();
?>

//$pdf->Output('fattura_28072012','D'); // mostro sul browser

/*
Destinazione dove mandare il documento. Può essere specificato uno dei seguenti valori:
* I: manda il file inline al browser. Il plug-in sarà utilizzato se presente. Il nome specificato con name sarà utilizzato quando l utente selezionerà l opzione "Salva con nome" sul link generato sul PDF.
* D: manda al browser e forza il download del file con il nome dato
* F: salva il file in locale con il nome dato
* S: ritorna il documento come stringa. name viene ignorato.
*/
