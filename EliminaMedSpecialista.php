<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
if(!empty($_POST['scelta']))
 {$scelta=$_POST['scelta'];
  $id=mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("cup") or die(mysql_error());
  foreach($scelta as $indice => $valore)
  {$sel="delete from medicispecialisti where IDSPECIALISTA='$valore'";
   $rs=mysql_query($sel);
  
   $sel1="delete from prenotazioni where FKSPECIALISTA='$valore'";
   $rs1=mysql_query($sel1);
  }
 mysql_close();  
 include("IndexAdmin.php");
 }
else print("Nessuna Scelta");
?>