<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script language="JavaScript" type="text/javascript">
 window.setTimeout ("location.href=('IndexAdmin.php')", 3000);
</script>
<?php
 include("BarraMenuAdmin.htm");
 $id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("cup") or die(mysql_error());
 $CF=$_POST['cf'];
 $EMAIL=$_POST['email'];
 $NOMEUTENTE=$_POST['username'];
 $PASSWORD=$_POST['password'];
 $SPECIALIZZAZIONE=$_POST['Specializzazione']; 
 $ASL=$_POST['ASL'];
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
 $NUMEROCIVICO=$_POST['numerocivico'];
 $INDIRIZZO=$INDIRIZZO." ".$NUMEROCIVICO;
 $CAP=$_POST['cap']; 
 
 $PASSWORD=md5($PASSWORD);
 $strsql="INSERT INTO medicispecialisti(CF,EMAIL,NOMEUTENTE,PASSWORD,NOME,COGNOME,SESSO,DATADINASCITA,LUOGODINASCITA,RESIDENZA,INDIRIZZO,CAP,SPECIALIZZAZIONE,ASL)";
 $strsql.="VALUES('$CF','$EMAIL','$NOMEUTENTE','$PASSWORD','$NOME','$COGNOME','$SESSO','$DATADINASCITA','$LUOGODINASCITA','$RESIDENZA','$INDIRIZZO','$CAP','$SPECIALIZZAZIONE','$ASL')";
 $ris=mysql_query($strsql) or die(mysql_error());
?>
<center>
<table width="70%">	
   <tr>
    <td background="Immagini/sfondoFrame.png">
	<center>
	<h2>REGISTRAZIONE MEDICO EFFETTUATA CON SUCCESSO</h2>
	<br><br>Tra pochi secondi verrai reindirizzato automaticamente nella home del sito web
	<br>    dove potrai visualizzare e gestire le tue visite mediche con pochi semplici click.
	<br>    Se la pagina non dovesse aprirsi puoi accedere alla tua home <a href='IndexAdmin.php'>cliccando qua.</a>
	<br><br>
	</center>
</td></tr>
  </table> 
  </center>
  </body> 
</html>