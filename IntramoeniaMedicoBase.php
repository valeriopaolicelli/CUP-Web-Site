<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuMedBase.htm");
?>
<center>
<table width="70%">	
   <tr>
    <td background="Immagini/sfondoFrame.png">
<br><br>Nell'ambito del Servizio Sanitario Nazionale della Repubblica Italiana, l'attivita' cosiddetta "intramoenia" si riferisce
<br>alle prestazioni erogate al di fuori del normale orario di lavoro dai medici di un ospedale, i quali utilizzano le 
<br>strutture ambulatoriali e diagnostiche dell'ospedale stesso a fronte del pagamento da parte del paziente di una tariffa.
<br>Il medico e' tenuto al rilascio di regolare fattura e la spesa, come tutte le spese sanitarie, e' detraibile dalle imposte. 
<br>Le prestazioni sono generalmente le medesime che il medico deve erogare, sulla base del suo contratto di lavoro 
<br>con il Servizio Sanitario Nazionale, attraverso la normale operativita' come medico ospedaliero.
<br>Le prestazioni erogate in regime di intramoenia garantiscono al cittadino la possibilita' di scegliere il medico
<br>a cui rivolgersi per una prestazione.
<br>Mediamente il medico devolve alla struttura ospedaliera per l'utilizzo dei locali, dei servizi di segreteria,
<br>delle apparecchiature e di quant'altro sia necessario allo svolgimento della prestazione circa il 6,5% del suo fatturato:
<br>nel 2010 ad esempio i medici ospedalieri italiani hanno fatturato circa 1,13 miliardi di euro, devolvendo alle ASL circa
<br>74 milioni. <br><br>
 <?php
    $id=mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db('cup') or die(mysql_error());
	$sql="SELECT DISTINCT SPECIALIZZAZIONE FROM medicispecialisti";
	$rs=mysql_query($sql);
	echo"<center>";
	$idpaz=$_GET['paziente'];
	echo"Seleziona il tipo di visita da prenotare.<br><br>";
	echo"<FORM METHOD='POST' action='ListaMedici2.php?paziente=".$idpaz."'>";
	$nspecializzazioni=mysql_num_rows($rs);
	echo"<SELECT NAME='s'>";
	for($i=0;$i<$nspecializzazioni;$i++)  echo"<OPTION VALUE=".mysql_result($rs,$i,0).">".mysql_result($rs,$i,0)."<BR>";
	echo"<INPUT TYPE='SUBMIT' VALUE='INVIA'>";
 ?>

	<br><br><center><img src="Immagini/Prenota.jpg"><BR><br><br>
	</td></tr>
  </table> 
  </center>
 </body> 
</html>