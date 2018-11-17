<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<body>
<?php
include("BarraMenuAdmin.htm");
$id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("cup") or die(mysql_error());
$paz=$_POST['paz'];
$med=$_POST['medi'];
$scelta=$_SESSION['scelta'];

$sql="SELECT * FROM pazienti WHERE FKMEDBAS='$scelta'";
   $record=mysql_query($sql) or die(mysql_error());
   $righe=mysql_num_rows($record);

   for($i=0;$i<$righe;$i++)
  { $id=mysql_result($record,$i,0);
    $cambia="UPDATE `pazienti` SET `FKMEDBAS` = ".$med." WHERE `IDPAZIENTE`='$id'";
    $re=mysql_query($cambia) or die(mysql_error());
  }
  
  $sel="delete from medicidibase where medicidibase.IDMEDICOBASE='$scelta'";
   $rs=mysql_query($sel);

print"<table width='70%' background='Immagini/sfondoFrame.png' border='0' align='center'>";
print"<tr><td colspan='3' align='center'><h2>OPERAZIONE COMPLETATA</h2></td></tr>";

?>
 </body>
</html>