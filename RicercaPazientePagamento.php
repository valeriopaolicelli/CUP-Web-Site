<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuMedBase.htm");
?>
<body>
<center>
<table width="70%">	
 <tr>
  <td background="Immagini/sfondoFrame.png">
<br>
<?php
$id=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('cup') or die(mysql_error());
$idmedbase=$_SESSION['IDMEDICOBASE'];
$sql="SELECT * FROM pazienti WHERE FKMEDBAS='$idmedbase'";
$rs=mysql_query($sql);
$npazienti=mysql_num_rows($rs);

for($i=0;$i<$npazienti;$i++)
{$idpaz=mysql_result($rs,$i,0);
	echo"<h2><center><a href=\"IntramoeniaMedicoBase.php?paziente=".$idpaz."\">".mysql_result($rs,$i,0)."&nbsp".mysql_result($rs,$i,5)."</a><br>";
}

?>
</table>
</center>
 </body> 
</html>