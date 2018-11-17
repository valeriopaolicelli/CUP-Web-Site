<?php
session_start();

include('fpdf.php'); //inclusione file di libreria
$pdf=new FPDF(); //creazione oggetto con metodo sostruttore FPDF
$pdf->AddPage(); //metodo che crea una pagina
$pdf->SetFont('Arial','B',16); //metodo che definisce il Font di caratteri
//in questo caso Arial, Bold 16
$pdf->Image('juventus-logo.jpg',10,6,40);

$pdf->Cell(200,65,'Biglietto',0,1,'C'); //cella con testo centrato

$pdf->Cell(200,10,'Nome:   '.$_SESSION['nome'].'',0,1,'C');
$pdf->Cell(200,10,'Cognome:   '.$_SESSION['cognome'].'',0,1,'C');
$pdf->Cell(200,10,'Età:   '.$_SESSION['eta'].'',0,1,'C');
$pdf->Cell(200,10,'Account:   '.$_SESSION['tipo'].'',0,1,'C');
$pdf->Cell(200,10,'Campionato:   '.$_SESSION['campionato'].'',0,1,'C');
$pdf->Cell(200,10,'Partita:   '.$_SESSION['partita'].'',0,1,'C');
$pdf->Cell(200,10,'Tribuna:   '.$_SESSION['tribuna'].'',0,1,'C');
$pdf->Cell(200,10,'Settore:   '.$_SESSION['settore'].'',0,1,'C');
$pdf->Cell(200,10,'Fila:   '.$_SESSION['fila'].'',0,1,'C');
$pdf->Cell(200,10,'Posto:   '.$_SESSION['posto'].'',0,1,'C');
$pdf->Cell(200,10,'Data:   '.$_SESSION['data'].'',0,1,'C');
$pdf->Cell(200,10,'Prezzo:   '.$_SESSION['prezzo'].'',0,1,'C');

$pdf->Output();// metodo che spedisce il documento al browser
?>
   



//$pdf->Output('fattura_28072012','D'); // mostro sul browser

/*
Destinazione dove mandare il documento. Può essere specificato uno dei seguenti valori:
* I: manda il file inline al browser. Il plug-in sarà utilizzato se presente. Il nome specificato con name sarà utilizzato quando l utente selezionerà l opzione "Salva con nome" sul link generato sul PDF.
* D: manda al browser e forza il download del file con il nome dato
* F: salva il file in locale con il nome dato
* S: ritorna il documento come stringa. name viene ignorato.
*/

