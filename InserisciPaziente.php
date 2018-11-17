<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script language="JavaScript" type="text/javascript">
 window.setTimeout ("location.href=('IndexMedBase.php')", 3000);
</script>
<?php
 include("BarraMenuMedBase.htm");
 $id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("cup") or die(mysql_error());
 $IDMEDICODIBASE=$_SESSION['IDMEDICOBASE'];
 $EMAIL=$_POST['email'];
 $USERNAME=$_POST['username'];
 $PASSWORD=$_POST['password'];
 $PASSWORD=md5($PASSWORD);
 $NOME=$_POST['nome'];
 $COGNOME=$_POST['cognome'];
 $CF=$_POST['cf'];
 $SESSO=$_POST['sesso'];
 $GIORNODINASCITA=$_POST['giornodinascita'];
 $MESEDINASCITA=$_POST['mesedinascita'];
 $ANNODINASCITA=$_POST['annodinascita'];
 $DATADINASCITA=$ANNODINASCITA.'-'.$MESEDINASCITA.'-'.$GIORNODINASCITA;
 $LUOGODINASCITA=$_POST['luogodinascita'];
 $RESIDENZA=$_POST['residenza'];
 $INDIRIZZO=$_POST['indirizzo'];
 $NUMEROCIVICO=$_POST['numerocivico'];
 $INDIRIZZO=$INDIRIZZO." ".$NUMEROCIVICO;
 $CAP=$_POST['cap']; 
 $strsql="INSERT INTO pazienti(EMAIL,NOMEUTENTE,PASSWORD,NOME,COGNOME,SESSO,DATADINASCITA,LUOGODINASCITA,RESIDENZA,INDIRIZZO,CF,CAP,FKMEDBAS)";
 $strsql.="VALUES('$EMAIL','$USERNAME','$PASSWORD','$NOME','$COGNOME','$SESSO','$DATADINASCITA','$LUOGODINASCITA','$RESIDENZA','$INDIRIZZO','$CF','$CAP','$IDMEDICODIBASE')";
 $ris=mysql_query($strsql) or die(mysql_error());
?>
<center>
<table width="70%">	
   <tr>
    <td background="Immagini/sfondoFrame.png">
	<center>
	<h2>REGISTRAZIONE PAZIENTE EFFETTUATA CON SUCCESSO</h2>
	<br><br>Tra pochi secondi verrai reindirizzato automaticamente nella home del sito web
	<br>    dove potrai prenotare e gestire le tue visite mediche con pochi semplici click.
	<br>    Se la pagina non dovesse aprirsi puoi accedere alla tua home <a href='IndexMedBase.php'>cliccando qua.</a>
	<br><br>
	</center>
</td></tr>
  </table> 
  </center>
  </body> 
</html>