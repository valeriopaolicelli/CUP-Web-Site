<?php
include("fpdf.php");//inclusione libreria classe fpdf
$pdf=new FPDF(); //creazione oggetto con metodo sostruttore FPDF
$pdf->AddPage(); //metodo che crea una pagina
$pdf->SetFont('Arial','B',16); //metodo che definisce il Font di caratteri
//in questo caso Arial, Bold 16
$id=mysql_connect("localhost","root","")
   or die ("non riesco a creare la connessione"); //nel caso di connessione fallita
MySQL_select_db("studenti") //apre il DataBase
   or die ("Non trovo il DB");
$sql="SELECT * FROM AnagraficaStudenti";
$rs=MySql_query($sql) //la query viene inviata al server ed eseguita
   or die("Query fallita");
$NumCampi=mysql_num_fields($rs);
$nrighe=MySql_num_rows($rs);
$pdf->ln();$pdf->ln();$pdf->ln();
  for ($i=0;$i<$nrighe;$i++)
   { for ($j=0;$j<$NumCampi;$j++)
      $pdf->Cell(30,10,MySql_result($rs,$i,$j),1,0,'C'); //cella con testo centrato e bordato
     $pdf->ln();// linea successiva
    }  
     $pdf->Output();// metodo che spedisce il documento al browser

 MySql_close();    

?>


