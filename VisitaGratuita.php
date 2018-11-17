<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuPaziente.htm");
?>
<center>
<table width="70%">	
 <tr><td background="Immagini/sfondoFrame.png">
<?php
 $mes=date("m"); 
 $mese=((int)$mes)-1; 
 $ann=date("Y");
 $anno=(int)$ann;
 $x='1';
 $id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db('cup') or die(mysql_error());
 $sql="SELECT DISTINCT SPECIALIZZAZIONE FROM medicispecialisti";
 $rs=mysql_query($sql);
 echo"<center>";
 echo"<BR>Seleziona il tipo di visita da prenotare.<br><BR>";
 echo"<FORM METHOD='POST' action='ListaGiorniVisitaGratuita.php?mese=".$mese."&anno=".$anno."&x=".$x."'>";
 $nspecializzazioni=mysql_num_rows($rs);
 echo"<SELECT NAME='s'>";
 for($i=0;$i<$nspecializzazioni;$i++)  echo"<OPTION VALUE=".mysql_result($rs,$i,0).">".mysql_result($rs,$i,0)."<BR>";
 echo"<INPUT TYPE='SUBMIT' VALUE='INVIA'><BR>";
?>
 <br><center><img src="Immagini/Prenota.jpg"><BR><br><br>
 </td></tr>
 </table> 
 </center>
 </body> 
</html>