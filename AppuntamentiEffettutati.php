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
	$id=mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db('cup') or die(mysql_error());
	$sql="SELECT * FROM prenotazioni WHERE FKPAZIENTE='$idpaz' order by DATA";
	$rsvisita=mysql_query($sql);
	$nvisite=mysql_num_rows($rsvisita);
	echo"<center>";
	for($i=0;$i<$nvisite;$i++)
	{$esito=mysql_result($rsvisita,$i,5);
	 if($esito!='VISITA NON ANCORA EFFETTUATA') 
	 {$DATA=mysql_result($rsvisita,$i,1);
$SPECIALIZZAZIONE=mysql_result($rsvisita,$i,2);
$TIPOVISITA=mysql_result($rsvisita,$i,3);
$ASL=mysql_result($rsvisita,$i,4);
$ESITO=mysql_result($rsvisita,$i,5);
$IDPAZIENTE=mysql_result($rsvisita,$i,6);
$IDSPECIALISTA=mysql_result($rsvisita,$i,7);
$sql="SELECT COGNOME,NOME FROM medicispecialisti WHERE IDSPECIALISTA='$IDSPECIALISTA'";
$rs=mysql_query($sql);
$COGNOMESPECIALISTA=mysql_result($rs,0,0);
$NOMESPECIALISTA=mysql_result($rs,0,1);
$sql="SELECT COGNOME,NOME FROM pazienti WHERE IDPAZIENTE='$IDPAZIENTE' order by IDPAZIENTE";
$rs=mysql_query($sql);
$COGNOMEPAZIENTE=mysql_result($rs,0,0);
$NOMEPAZIENTE=mysql_result($rs,0,1);
echo"<table border=2 width=100%><td colspan=3><center>VISITA ".$SPECIALIZZAZIONE."</td></tr>"; 
echo"<tr><td colspan=3><p align=right>PRENOTATA IN DATA ".$DATA."</td></tr>";
echo"<tr><td colspan=3>PRESSO L'ASL DI ".$ASL."</td></tr>";
echo"<tr><td colspan=3>Dottore: ".$COGNOMESPECIALISTA." ".$NOMESPECIALISTA."</td></tr>";
echo"<tr><td colspan=3>Paziente: ".$COGNOMEPAZIENTE." ".$NOMEPAZIENTE."</td></tr>";
echo"<tr><td colspan=3>Esito visita: ".$ESITO."</td></tr><br><br>";	 
	 
	 }
	}
	
	
	
 ?>
	</td></tr>
  </table> 
  </center>
 </body> 
</html>