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
$IDPAZIENTE=$_SESSION['iduser'];
$id=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('cup') or die(mysql_error());
$sql="SELECT * FROM prenotazioni WHERE FKPAZIENTE='$IDPAZIENTE' order by DATA";
$rs=mysql_query($sql);
$nvisite=mysql_num_rows($rs);
echo"<CENTER><FORM METHOD='POST' action='DettagliAppuntamenti.php'>";
echo"<SELECT NAME='visita'>";
echo"<option value='seleziona'>Seleziona una visita per avere maggiori informazioni.";	
for($i=0;$i<$nvisite;$i++)
{$IDMEDICOSPECIALISTA=mysql_result($rs,$i,5);
 $sql1="SELECT IDSPECIALISTA,COGNOME FROM medicispecialisti WHERE IDSPECIALISTA='$IDMEDICOSPECIALISTA'";
 $rs1=mysql_query($sql1);
	echo"<OPTION VALUE=".mysql_result($rs,$i,0).">VISITA ".mysql_result($rs,$i,2)." DEL ".mysql_result($rs,$i,1)."<BR>";
}
	echo"<INPUT TYPE='SUBMIT' VALUE='INVIA' >";
?>
<br><center><br><img src="Immagini/appuntamenti.jpg" width="80%" border=0><br><br>
</table>
</center>
 </body> 
</html>