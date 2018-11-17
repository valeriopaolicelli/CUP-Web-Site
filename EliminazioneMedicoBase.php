<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<body>
<?php
include("BarraMenuAdmin.htm");
$id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("cup") or die(mysql_error());
$Sql="SELECT IDMEDICOBASE, NOME, COGNOME FROM medicidibase";
$rs=mysql_query($Sql);
$nrighe=mysql_num_rows($rs);
$ncampi=mysql_num_fields($rs);

print"<table width='70%' background='Immagini/sfondoFrame.png' border='0' align='center'>";
print"<form action='EliminaMedBase.php' method='post' name='eliminazionemedbase'>";
print"<tr><td colspan='3' align='center'><h2>ELIMINAZIONE MEDICO DI BASE</h2></td></tr>";
print"<tr>";
for($i=0;$i<$ncampi;$i++)
{print"<TD>".mysql_field_name($rs,$i)."</TD>";}
print"</TR>";
for($i=0;$i<$nrighe;$i++)
{print"<TR>"; 

 for($j=0;$j<$ncampi;$j++)
 {print"<TD>".mysql_result($rs,$i,$j)."</TD>";}
  print"<TD><INPUT TYPE='RADIO' NAME='scelta' VALUE=".mysql_result($rs,$i,0)."</TD><BR>";
  print"</TR>";
 }
print"<TR><TD><INPUT TYPE='submit' VALUE='Invia'></TD></TR></form></table>";
?>


 </body>
</html>