<?php
if(!empty($_POST['scelta']))
 {$scelta=$_POST['scelta'];
  $id=mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("cup") or die(mysql_error());
  foreach($scelta as $indice => $valore)
  {$sel="delete from pazienti where IDPAZIENTE='$valore'";
   $rs=mysql_query($sel);
  }
 mysql_close();  
 include("IndexMedBase.php");
 }
else print("Nessuna Scelta");
?>