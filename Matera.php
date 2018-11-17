<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenu.htm");
$id=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('cup') or die(mysql_error());
$sql="SELECT IDSPECIALISTA, NOME, COGNOME, RESIDENZA, SPECIALIZZAZIONE, EMAIL FROM medicispecialisti WHERE ASL='MATERA' ORDER BY NOME, COGNOME";
$rs=mysql_query($sql);
?>
<center>
<table width="70%">
   <tr>
    <td background="Immagini/sfondoFrame.png">
<center>
<H1>ASL MATERA</H1>
<img src="Immagini/aslMatera.gif" usemap="#basilicata" border="0">
<table border=0 style ="margin-left:auto;margin-right:auto;">
<tr>
	 <td><center>
	     <h3>Indirizzo: Via Montescaglioso 7 - 75100 Matera (MT)
		 <br>Telefono: <a href="callto:0835 2431"> 0835 2431 </a>
	     <br>Fax: <a href="callto:0835 243 653"> 0835 243 653 </a>
		 <br>Email: <a href="mailto:asl4.maroscia@rete.basilicata.it">asl4.maroscia@rete.basilicata.it</a>
		 <br>Codice ASL: MT202</h3>
		 <h5><table border=1>
		 <tr><td colspan=6><center><h3>Medici Specialisti</h3></center></td></tr>
		 <tr>
		 <?php
		 $nr=mysql_num_rows($rs);
		 $nc=mysql_num_fields($rs);
		 for($i=0;$i<$nc;$i++)
		 echo"<td><center> &nbsp ".mysql_field_name($rs,$i)."&nbsp</center></td>";
		 for($i=0;$i<$nr;$i++)
		 {echo"<tr>";
		  for($j=0;$j<$nc;$j++)
		   echo"<td><center>".Mysql_result($rs,$i,$j)."</center></td>";
		  echo"</tr>";
		 }
		 echo"</table>";
		 ?>
		  </h5>
		 </center>
	 </td>
</tr>
</table>
</td></tr>
  </table>
  </center>
 </body> 
</html>