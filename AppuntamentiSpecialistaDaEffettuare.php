<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("BarraMenuMedicoSpec.htm");
?>
<body>
<center>
<table width="70%">	
 <tr>
  <td background="Immagini/sfondoFrame.png">
<br>
<?php
$idsp=$_SESSION['idsp'];
$id=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('cup') or die(mysql_error());
$sql="SELECT * FROM prenotazioni WHERE FKSPECIALISTA='$idsp' order by DATA";
$rs=mysql_query($sql);
$nvisite=mysql_num_rows($rs);
echo"<CENTER><FORM METHOD='POST' action='DettagliAppuntamentiSpecialista.php'>";
echo"<SELECT NAME='visita'>";
echo"<option value='seleziona'>Seleziona una visita per avere maggiori informazioni.";	
for($i=0;$i<$nvisite;$i++)
{$IDPAZIENTE=mysql_result($rs,$i,6);
 $sql1="SELECT IDPAZIENTE,NOME, COGNOME, RESIDENZA FROM PAZIENTI WHERE IDPAZIENTE='$IDPAZIENTE'";
 $rs1=mysql_query($sql1);
 $GIORNO=date("d");
 $MESE=date("m");
 $ANNO=date("Y");
 $DATA=mysql_result($rs,$i,1);
 $GIORNOVISITA=$DATA[0].''.$DATA[1];
 $MESEVISITA=$DATA[3].''.$DATA[4];
 $ANNOVISITA=$DATA[6].''.$DATA[7].''.$DATA[8].''.$DATA[9];
 if(($ANNOVISITA>=$ANNO)&&($MESEVISITA>=$MESE)&&($GIORNOVISITA>=$GIORNO)) echo"<OPTION VALUE=".mysql_result($rs,$i,0).">VISITA DEL ".mysql_result($rs,$i,1)."<BR>";}
 echo"<INPUT TYPE='SUBMIT' VALUE='INVIA' >";
?>
<br><center><br><img src="Immagini/appuntamenti.jpg" width="80%" border=0><br><br>
</table>
</center>
 </body> 
</html>