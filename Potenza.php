<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenu.htm");
$id=mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db('cup') or die(mysql_error());
$sql="SELECT IDSPECIALISTA, NOME, COGNOME, RESIDENZA, SPECIALIZZAZIONE, EMAIL FROM medicispecialisti WHERE ASL='POTENZA' ORDER BY NOME, COGNOME";
$rs=mysql_query($sql);
?>
<center>
<table width="70%">
	
	
   <tr>
    <td background="Immagini/sfondoFrame.png">

<center>
<H1>ASL POTENZA</H1>
<img src="Immagini/aslPotenza.jpg" usemap="#basilicata" border="0">
<table border=0 style ="margin-left:auto;margin-right:auto;">
<tr>
	 <td><center>
	     <h3>Indirizzo: Via Torraca 2 - 85100 Potenza (Pz)
		 <br>Telefono: <a href="callto:0971 3105 36 - 75"> 0971 3105 36 - 75 </a>
	     <br>Fax: <a href="callto:0835 243 653"> 0835 243 653 </a>
		 <br>Email: <a href="mailto:info@asl2.potenza.it">info@asl2.potenza.it</a>
		 <br>Codice ASL: PZ 102</H3>
		 <H5><table border=1>
		 <tr><td colspan=6><center><h3>Medici Specialisti</center></h3></td></tr>
		 <tr>
		 <?php
		 $nr=mysql_num_rows($rs);
		 $nc=mysql_num_fields($rs);
		 for($i=0;$i<$nc;$i++)
		 echo"<td><center>".mysql_field_name($rs,$i)."</center></td>";
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