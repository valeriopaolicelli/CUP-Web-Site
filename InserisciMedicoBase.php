<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script language="JavaScript" type="text/javascript">
 window.setTimeout ("location.href=('IndexAdmin.php')", 4000);
</script>
<?php
 include("BarraMenuAdmin.htm");
 $id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("cup") or die(mysql_error());
 $CF=$_POST['cf'];
 $EMAIL=$_POST['email'];
 $Username=$_POST['username'];
 $Chiave=$_POST['password'];
 $NOME=$_POST['nome'];
 $COGNOME=$_POST['cognome'];
 $SESSO=$_POST['sesso'];
 $GIORNODINASCITA=$_POST['giornodinascita'];
 $MESEDINASCITA=$_POST['mesedinascita'];
 $ANNODINASCITA=$_POST['annodinascita'];
 $DATADINASCITA=$GIORNODINASCITA.'-'.$MESEDINASCITA.'-'.$ANNODINASCITA;
 $LUOGODINASCITA=$_POST['luogodinascita'];
 $RESIDENZA=$_POST['residenza'];
 $INDIRIZZO=$_POST['indirizzo'];
 $CAP=$_POST['cap']; 
 $Chiave=md5($Chiave);
 $strsql="INSERT INTO medicidibase(CF,EMAIL,NOMEUTENTE,PASSWORD,NOME,COGNOME,SESSO,DATADINASCITA,LUOGODINASCITA,RESIDENZA,INDIRIZZO,CAP)";
 $strsql.="VALUES('$CF','$EMAIL','$Username','$Chiave','$NOME','$COGNOME','$SESSO','$DATADINASCITA','$LUOGODINASCITA','$RESIDENZA','$INDIRIZZO','$CAP')";
 $ris=mysql_query($strsql) or die(mysql_error());
?>
<center>
<table width="70%">	
   <tr>
    <td background="Immagini/sfondoFrame.png">
	<center>
	<h2>REGISTRAZIONE MEDICO EFFETTUATA CON SUCCESSO</h2>
	<br><br>Tra pochi secondi verrai reindirizzato automaticamente nella home del sito web
	<br>    dovepotrai visualizzare e gestire le tue visite mediche con pochi semplici click.
	<br>    Se la pagina non dovesse aprirsi puoi accedere alla tua home <a href='IndexAdmin.php'>cliccando qua.</a>
	<br><br>
	</center>
</td></tr>
  </table> 
  </center>
  </body> 
</html>