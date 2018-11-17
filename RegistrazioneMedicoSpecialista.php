<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script language="JavaScript"src="ControlloMedicoSpecialista.js">
</script>
<?php
include("BarraMenuAdmin.htm");
?>
<table width="70%" background="Immagini/sfondoFrame.png" border=0 align="center">	
 <form method="post" action="InserisciMedicoSpecialista.php" name="registrazionemedico" onSubmit="return Controllo()">
 <tr><td colspan="3" align="center"><h2>REGISTRAZIONE MEDICO SPECIALISTA</h2></td>
 </tr>
 <tr><td width=25%><font color="black" face="Arial, Helvetica, sans-serif">Username</font></td>
     <td width=20%><input type="text" name="username" maxlength="30" size="38" value="Inserisci il nome utente" onfocus="if(this.value=='Inserisci il nome utente') this.value='';" onblur="if(this.value=='') this.value='Inserisci il nome utente'"></td>
     <td align="left" id="checkusername"></td>
 </tr>
 <tr><td ><font color="black" face="Arial, Helvetica, sans-serif">Password</font></td>
     <td ><input type="password" name="password" maxlength="30" size="38" value="Inserisci la password" onfocus="if(this.value=='Inserisci la password') this.value='';" onblur="if(this.value=='') this.value='Inserisci la password'"></td>
     <td id="checkpassword"></td>
 </tr>
 <tr><td ><font color="black" face="Arial, Helvetica, sans-serif">Riscrivi la password</font></td>
     <td><input type="password" name="repassword" maxlength="30" size="38" value="Riscrivi la password" onfocus="if(this.value=='Riscrivi la password') this.value='';" onblur="if(this.value=='') this.value='Riscrivi la password'"></td>
     <td id="checkrepassword"></td>
 </tr>
<tr><td ><font color="black" face="Arial, Helvetica, sans-serif">Email</font></td>
     <td><input type="text" name="email" maxlength="30" size="38" value="Inserisci la mail" onfocus="if(this.value=='Inserisci la mail') this.value='';" onblur="if(this.value=='') this.value='Inserisci la mail'"></td>
     <td id="checkemail"></td>
 </tr>
 <tr><td ><font color="black" face="Arial, Helvetica, sans-serif">Nome</font></td>
     <td><input type="text" name="nome" maxlength="30" size="38" value="Inserisci il nome" onfocus="if(this.value=='Inserisci il nome') this.value='';" onblur="if(this.value=='') this.value='Inserisci il nome'"></td>
     <td id="checknome"></td>
 </tr>
 <tr>
    <td><font color="black" face="Arial, Helvetica, sans-serif">Cognome</font></td>
    <td><input type="text" name="cognome" maxlength="30" size="38" value="Inserisci il cognome" onfocus="if(this.value=='Inserisci il cognome') this.value='';" onblur="if(this.value=='') this.value='Inserisci il cognome'"></td>
    <td id="checkcognome"></td> 
 </tr>
 <tr>
    <td><font color="black" face="Arial, Helvetica, sans-serif">Codice Fiscale</font></td>
    <td><input type="text" name="cf" maxlength="30" size="38" value="Inserisci il codice fiscale" onfocus="if(this.value=='Inserisci il codice fiscale') this.value='';" onblur="if(this.value=='') this.value='Inserisci il codice fiscale'"></td>
    <td id="checkcf"></td>
 </tr>
 <tr>
    <td><font color="black" face="Arial, Helvetica, sans-serif">Sesso</font></td>
    <td><font color="black" face="Arial, Helvetica, sans-serif">UOMO</font><input type="radio" name="sesso" value="UOMO" checked>
        <font color="black" face="Arial, Helvetica, sans-serif">DONNA</font><input type="radio" name="sesso" value="DONNA"></td>
    <td></td>
 </tr>
 <tr><td><font color="black" face="Arial, Helvetica, sans-serif">Data Di Nascita</font></td>
     <td><select size=1 cols=31 name="giornodinascita">
	     <option selected value="GIORNO">GIORNO
		 <option value=01>1
		 <option value=02>2
		 <option value=03>3
		 <option value=04>4
		 <option value=05>5
		 <option value=06>6
		 <option value=07>7
		 <option value=08>8
		 <option value=09>9
		 <option value=10>10
		 <option value=11>11
		 <option value=12>12
		 <option value=13>13
		 <option value=14>14
		 <option value=15>15
		 <option value=16>16
		 <option value=17>17
		 <option value=18>18
		 <option value=19>19
		 <option value=20>20
		 <option value=21>21
		 <option value=22>22
		 <option value=23>23
		 <option value=24>24
		 <option value=25>25
		 <option value=26>26
		 <option value=27>27
		 <option value=28>28
		 <option value=29>29
		 <option value=30>30
		 <option value=31>31
		</select>
        <select name="mesedinascita" size=1 cols=12>
        <option selected value="MESE">MESE
         <option value=01>Gennaio
		 <option value=02>Febbraio
		 <option value=03>Marzo
		 <option value=04>Aprile
		 <option value=05>Maggio
		 <option value=06>Giugno
		 <option value=07>Luglio
		 <option value=08>Agosto
		 <option value=09>Settembre
		 <option value=10>Ottobre
		 <option value=11>Novembre
		 <option value=12>Dicembre
	   	</select>
				<?php
  $inizio = 1940;
  $fine = 1982;
  ?>
<select name="annodinascita">
  <option value="<?php echo "Anno";?>" selected>
  <?php
echo"ANNO";?></option>
  <?php
    for ($i = $inizio+1; $i <= $fine; $i++) {?>
  <option value="<?php echo($i);?>">
  <?php 
  echo($i);
  ?>
  </option>
   <?php 
   }
   ?>
   </td>
	<td id="checkdatadinascita"></td>
   </tr>	
   <tr><td><font color="black" face="Arial, Helvetica, sans-serif">Luogo Di Nascita</font></td>
       <td><input type="text" name="luogodinascita" maxlength="30" size="38" value="Inserisci il luogo di nascita" onfocus="if(this.value=='Inserisci il luogo di nascita') this.value='';" onblur="if(this.value=='') this.value='Inserisci il luogo di nascita'"></td>
       <td id="checkluogodinascita"></td>
   </tr> 
   <tr><td><font color="black" face="Arial, Helvetica, sans-serif">Residenza</font></td>
       <td><input type="text" name="residenza" maxlength="30" size="38" value="Inserisci la residenza" onfocus="if(this.value=='Inserisci la residenza') this.value='';" onblur="if(this.value=='') this.value='Inserisci la residenza'"></td>
       <td id="checkresidenza"></td>
   </tr> 
   <tr><td><font color="black" face="Arial, Helvetica, sans-serif">Indirizzo</font></td>
       <td><input type="text" name="indirizzo" maxlength="30" size="24" value="Inserisci la via" onfocus="if(this.value=='Inserisci la via') this.value='';" onblur="if(this.value=='') this.value='Inserisci la via'">
           <font color="black" face="Arial, Helvetica, sans-serif"> N</font>
           <input type="text" name="numerocivico" maxlength="5" size="4" value="Numero" onfocus="if(this.value=='Numero') this.value='';" onblur="if(this.value=='') this.value='numero'"></td>
   <td id="checkindirizzo"></td>
   </tr>
   <tr><td><font color="black" face="Arial, Helvetica, sans-serif">CAP</font></td>
       <td><input type="text" name="cap" maxlength="5" size="5" value="CAP" onfocus="if(this.value=='CAP') this.value='';" onblur="if(this.value=='') this.value='CAP'"></td>
       <td id="checkcap"></td>
   </tr>
    <tr><td><font color="black" face="Arial, Helvetica, sans-serif">Specializzazione</font></td>
     <td><select name="Specializzazione" size=1 cols=5>
         <option selected value="Specializzazione">Specializzazione
         <option value='OCULISTICA'>Oculista
		 <option value='DERMATOLOGICA'>Dermatologo
		 <option value='CHIRURGICA'>Chirurgo
		 <option value='ODONTOIATRICA'>Odontoiatra
         <option value='NEUROLOGICA'>Neurologo
	     </select>
		 <select name="ASL" size=1 cols=2>
         <option selected value='ASL'>ASL
         <option value='MATERA'>Matera
		 <option value='POTENZA'>Potenza
		 </select></td>
     <td id="checkasl"></td>
 </tr>
   <tr><td colspan=2><center><textarea rows="5" cols="60" disabled>
							  Informativa ai sensi del D.Lgs. 196/2003 ("Codice in materia di protezione dei dati personali").<br>
							  Conformemente all'impegno e alla cura che Bcd Srl dedica alla tutela dei dati personali, La informiamo sulle modalità, finalità e ambito di comunicazione e diffusione dei Suoi dati personali e sui Suoi diritti, in conformità all'art. 13 del D. Lgs. 196/2003.<br>
							  I dati personali che Lei fornirà verranno registrati e conservati su supporti elettronici protetti e trattati con adeguate misure di sicurezza anche associandoli ed integrandoli con altri DataBase.<br>
							  I dati e i cookies da Lei ricevuti saranno trattati da  Bcd Srl esclusivamente con modalità e procedure necessarie per fornirLe i servizi da Lei richiesti.<br>
							  I dati non saranno diffusi ma potranno essere comunicati, ove necessario per l'erogazione del servizio, a società che svolgono per nostro conto compiti di natura tecnica od organizzativa strumentali alla fornitura dei servizi richiesti. Inoltre potranno essere utilizzati per effettuare analisi statistiche, indagini di mercato e invio di  informazioni commerciali sui prodotti e sulle iniziative promozionali Bcd Srl e/o di società terze.<br>
							  In ogni momento ha anche il diritto di farli aggiornare, integrare, rettificare o cancellare, chiederne il blocco ed opporsi al loro trattamento. Ricordiamo che questi diritti sono previsti dal Art.7  del D. Lgs 196/2003.<br>
							  L'esercizio dei diritti di cui all'art. 7 del D.Lgs 196/03 potrà effettuarsi attraverso  specifica comunicazione a mezzo  posta  indirizzata alle medesime Società, o attraverso la casella di posta elettronica  dedicata: redazione@cinquantamila.it.<br>
							  Conformemente alla normativa vigente Le chiederemo quindi di esprimere il consenso per i trattamenti di dati barrando la casella "Accetto". Resta inteso che il consenso si riferisce al trattamento dei dati  ad eccezione di quelli  strettamente necessari per le operazioni ed i servizi da Lei richiesti, al momento della sua adesione in quanto per queste attività il suo consenso non è necessario.
							 </textarea></td></tr>
   <tr>
   <tr><td colspan=2><center>Accetto i termini e condizioni per la registrazione al portale web.
	                 <input type="checkbox" id="check" name="accetto" onclick="unlock(this,'invia')"></center></td>
   </tr>
   <tr cellspacing=60>
    <td align="right"><input name="Invia" type="submit" id="invia" value="INVIA" disabled></td>
	<td colspan=2 align="left"><input name="Cancella" type="button" id="cancella" value="CANCELLA" onClick=location.href="RegistrazioneMedicoSpecialsta.php"></td>
   </tr>
  </table> 
 </form> 
</html>