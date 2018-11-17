<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script language="JavaScript" type="text/javascript">
 window.setTimeout ("location.href=('IndexAdmin.php')", 4000);
</script>
<?php
 include("BarraMenuMedicoSpec.htm");
 $id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("cup") or die(mysql_error());
 $DETTAGLI=$_POST['dettagli'];
 $IDVISITA=$_GET['IDVISITA'];
 $sql="UPDATE prenotazioni SET ESITO='$DETTAGLI' WHERE IDPRENOTAZIONE='$IDVISITA'";
 $rs=mysql_query($sql);
 
 
?>
<center>
<table width="70%">	
   <tr>
    <td background="Immagini/sfondoFrame.png">
	<center>
	<h2>CARTELLA CLINICA COMPILATA CON SUCCESSO</h2>
	<br><br>Tra pochi secondi verrai reindirizzato automaticamente nella home del sito web
	<br>    Se la pagina non dovesse aprirsi puoi accedere alla tua home <a href='IndexMedicoSpec.php'>cliccando qua.</a>
	<br><br>
	</center>
</td></tr>
  </table> 
  </center>
  </body> 
</html>