<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuMedBase.htm");
?>
<center>
<table width="70%">	
   <tr>
    <td background="Immagini/sfondoFrame.png">
 <?php

 $idpaz=$_GET['paziente'];
  $mes=date("m"); 
  $mese=((int)$mes)-1; 
  $ann=date("Y");
  $anno=(int)$ann;
  $x='1';
   $id=mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db('cup') or die(mysql_error());
	$specializzazione=$_POST['s'];
	if($specializzazione=='OCULISTICA') $nomedottore='oculista';
	if($specializzazione=='DERMATOLOGICA') $nomedottore='dermatologo';
	if($specializzazione=='CHIRURGICA') $nomedottore='chirurgo';
	if($specializzazione=='ODONTOIATRICA') $nomedottore='odontoiatra';
	if($specializzazione=='NEUROLOGICA') $nomedottore='neurologo';
	echo"<center>";
	echo"<br>Seleziona il medico ".$nomedottore." che effettuera' la visita.<br><br>";
	$sql="SELECT IDSPECIALISTA,COGNOME FROM medicispecialisti WHERE medicispecialisti.SPECIALIZZAZIONE='$specializzazione'";
	$rs=mysql_query($sql);
	$nmedici=mysql_num_rows($rs);
	echo"<FORM METHOD='POST' action='CalendarioIntramoenia2.php?mese=".$mese."&paziente=".$idpaz."&anno=".$anno."&specializzazione=".$specializzazione."&x=".$x."'>";
	echo"<SELECT NAME='m'>";
	for($i=0;$i<$nmedici;$i++) echo"<OPTION VALUE=".mysql_result($rs,$i,0).">Dr. ".mysql_result($rs,$i,1)."<BR>";
	echo"<INPUT TYPE='SUBMIT' VALUE='SELEZIONA' >";
 ?>
	<br><center><br><img src="Immagini/Prenota.jpg"><BR><br><br>
	</td></tr>
  </table> 
  </center>
 </body> 
</html>
