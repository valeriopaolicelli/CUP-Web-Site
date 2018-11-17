<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<body>
<?php
include("BarraMenuAdmin.htm");
$id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("cup") or die(mysql_error());
$Sql="SELECT IDPAZIENTE, NOME, COGNOME, CF FROM pazienti order by IDPAZIENTE";
$rs=mysql_query($Sql) or die(mysql_error());
$nrighe=mysql_num_rows($rs);
$ncampi=mysql_num_fields($rs);
echo"<table width='70%' background='Immagini/sfondoFrame.png' border=0 align='center'>";
echo"<form action='EliminaPazienteAdmin.php' method='post' name='eliminazionepaziente'>";
echo"<tr><td colspan='3'><CENTER><B>ELIMINAZIONE PAZIENTE</CENTER></td></tr>";
echo"<tr>";
for($i=0;$i<$ncampi;$i++)
{print"<TD><B>".mysql_field_name($rs,$i)."</TD>";}
print"</TR>";
for($i=0;$i<$nrighe;$i++)
{print"<TR>";
 for($j=0;$j<$ncampi;$j++)
 {print"<TD>".mysql_result($rs,$i,$j)."</TD>";}
 print"<TD><INPUT TYPE='checkbox' NAME='scelta[".$i."]'VALUE=".mysql_result($rs,$i,0)."</TD><BR>";
 print"</TR>";
}
print"<TR><TD><INPUT TYPE='submit' VALUE='Invia'></TD></TR></form></table>";
?>
 </body>
</html>

