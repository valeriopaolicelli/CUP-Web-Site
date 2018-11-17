<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenu.htm");
?>
<center>
<table width="70%">
    <tr>
    <td background="Immagini/sfondoFrame.png">
	<center><br>
    <b>LOGIN: AREA AMMINISTRATORE</b><br><br>
    <form name="form1" method="POST" action="EffettuaLoginAdmin.php">
      Username:
      <input name="NOMEUTENTE" type="text">
      <br>
      Password:
      <input name="PASSWORD" type="password">
	  <br>
    <input name="Submit" type="submit" value="Entra">
   	</td>
	</tr>
</table>
</center>
</html>