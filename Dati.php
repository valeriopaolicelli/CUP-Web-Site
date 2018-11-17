<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuPaziente.htm");
?>
<center>
<table width="70%">	
   <tr>
    <td background="Immagini/sfondoFrame.png">
  <CENTER><B>I tuoi dati sono stati inviati con successo !!</B></CENTER><BR>
  <?php
    print "Cognome --> ".$_POST['cognome']. "<br>";
    print "Nome --> ".$_POST['nome']."<br>";
    print "Data di Nascita --> ".$_POST['nascita']."<br>";
    print "Città di provenienza --> ".$_POST['citta']."<br>";
    print "Indirizzo --> ".$_POST['indirizzo']."<br>";    
    print "Numero di telefono --> ".$_POST['telefono']."<br>";    
    print "Città in cui si è prenotata la visita --> ".$_POST['citta_2']."<br>";    
    

  ?>
  <br><br>
<center><u><i>
  <a href="INDEX.php"> Torna alla home ! </a>
</i></u></center>
	</td></tr>
  </table> 
  </center>
 </body> 
</html> 