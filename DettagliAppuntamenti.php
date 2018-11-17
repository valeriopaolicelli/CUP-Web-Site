<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuPaziente.htm");
?>
<body>
<center>
<table width="70%">	
 <tr>
  <td background="Immagini/sfondoFrame.png">
<br>
<?php
$datadioggi=date("d-m-Y");
$IDPAZIENTE=$_SESSION['iduser'];
$id=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('cup') or die(mysql_error());
$sql="SELECT * FROM prenotazioni WHERE FKPAZIENTE='$IDPAZIENTE'";
$rs=mysql_query($sql);
$nvisite=mysql_num_rows($rs);
echo"<CENTER><FORM METHOD='POST' action='DettagliAppuntamenti.php'>";
	echo"<SELECT NAME='visita'>";
	echo"<option value='seleziona'>Seleziona una visita per avere maggiori informazioni.";	
	for($i=0;$i<$nvisite;$i++)
{$IDMEDICOSPECIALISTA=mysql_result($rs,$i,7);
 $sql1="SELECT IDSPECIALISTA,COGNOME FROM medicispecialisti WHERE IDSPECIALISTA='$IDMEDICOSPECIALISTA'";
 $rs1=mysql_query($sql1);
 echo"<OPTION VALUE=".mysql_result($rs,$i,0).">VISITA ".mysql_result($rs,$i,2)." DEL ".mysql_result($rs,$i,1)."<BR>";}
 echo"<INPUT TYPE='SUBMIT' VALUE='INVIA' >";
$IDVISITA=$_POST['visita'];
if($IDVISITA!='seleziona'){
$sqlvisita="SELECT * FROM prenotazioni WHERE IDPRENOTAZIONE='$IDVISITA'";
$rsvisita=mysql_query($sqlvisita);
$DATA=mysql_result($rsvisita,0,1);
$SPECIALIZZAZIONE=mysql_result($rsvisita,0,2);
$TIPOVISITA=mysql_result($rsvisita,0,3);
$ASL=mysql_result($rsvisita,0,4);
$ESITO=mysql_result($rsvisita,0,5);
$IDPAZIENTE=mysql_result($rsvisita,0,6);
$IDSPECIALISTA=mysql_result($rsvisita,0,7);
$sql="SELECT COGNOME,NOME FROM medicispecialisti WHERE IDSPECIALISTA='$IDSPECIALISTA'";
$rs=mysql_query($sql);
$COGNOMESPECIALISTA=mysql_result($rs,0,0);
$NOMESPECIALISTA=mysql_result($rs,0,1);
$sql="SELECT COGNOME,NOME FROM pazienti WHERE IDPAZIENTE='$IDPAZIENTE'";
$rs=mysql_query($sql);
$COGNOMEPAZIENTE=mysql_result($rs,0,0);
$NOMEPAZIENTE=mysql_result($rs,0,1);
echo"<BR><BR><table border=2 width=100%><td colspan=3><center>VISITA ".$SPECIALIZZAZIONE."</td></tr>"; 
echo"<tr><td colspan=3><p align=right>PRENOTATA IN DATA ".$DATA."</td></tr>";
echo"<tr><td colspan=3>PRESSO L'ASL DI ".$ASL."</td></tr>";
echo"<tr><td colspan=3>Dottore: ".$COGNOMESPECIALISTA." ".$NOMESPECIALISTA."</td></tr>";
echo"<tr><td colspan=3>Paziente: ".$COGNOMEPAZIENTE." ".$NOMEPAZIENTE."</td></tr>";

$GIORNO=date("d");
$MESE=date("m");
$ANNO=date("Y");
$GIORNOVISITA=$DATA[0].''.$DATA[1];
$MESEVISITA=$DATA[3].''.$DATA[4];
$ANNOVISITA=$DATA[6].''.$DATA[7].''.$DATA[8].''.$DATA[9];
if(($ANNOVISITA<=$ANNO)&&($MESEVISITA<=$MESE)&&($GIORNOVISITA<=$GIORNO)) echo"<tr><td colspan=3>Il medico non ha ancora analizzato i risultati della visita. Riprovare piu' tardi.</td></tr>";
else if($ESITO=='VISITA NON ANCORA EFFETTUATA') {echo"<tr><td colspan=3><a href='ReportPhpPdf/SalvaPdfVisita.php?DATA=$DATA&SPECIALIZZAZIONE=$SPECIALIZZAZIONE&TIPOVISITA=$TIPOVISITA' target='_blank'>Salva una copia della tua prenotazione come pdf</a>";
                                            echo"<br>!ATTENZIONE! Bisogna necessariamente stampare la ricevuta e presentarla all'accettazione.</td></tr>";}
     else echo"<tr><td colspan=3>Esito visita: ".$ESITO."</td></tr>";
}
else echo"<br><center><br><img src='Immagini/appuntamenti.jpg' width='80%' border=0><br><br>";

	?>

</table>
</center>
 </body> 
</html>