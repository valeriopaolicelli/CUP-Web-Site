<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script language="JavaScript" type="text/javascript">
 window.setTimeout("location.href=('Appuntamenti.php')",4000);
</script>
<?php
 include("barraMenuPaziente.htm");
?>
<body>
 <center>
 <table width="70%">	
 <tr><td background="Immagini/sfondoFrame.png"><br>
<?php
$TIPOVISITA='INTRAMOENIA';
$SPECIALIZZAZIONE=$_GET['specializzazione'];
$IDMEDICO=$_GET['medico'];
$IDPAZIENTE=$_SESSION['iduser'];
$g=$_GET["giorno"];
$m=$_GET["mese"];
$m=$m+1;
$a=$_GET["anno"];
if($g=="1"){$g='01';}
if($g=="2"){$g='02';}
if($g=="3"){$g='03';}
if($g=="4"){$g='04';}
if($g=="5"){$g='05';}
if($g=="6"){$g='06';}
if($g=="7"){$g='07';}
if($g=="8"){$g='08';}
if($g=="9"){$g='09';}
if($m=="1"){$m='01';}
if($m=="2"){$m='02';}
if($m=="3"){$m='03';}
if($m=="4"){$m='04';}
if($m=="5"){$m='05';}
if($m=="6"){$m='06';}
if($m=="7"){$m='07';}
if($m=="8"){$m='08';}
if($m=="9"){$m='09';}
$DATA=$g.'-'.$m.'-'.$a;
$mes=$m+1;
$id=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('cup') or die(mysql_error());
$sql="SELECT ASL FROM medicispecialisti WHERE IDSPECIALISTA='$IDMEDICO'";
$rs=mysql_query($sql);
$ASL=mysql_result($rs,0,0);
$sql="SELECT * FROM prenotazioni";
$rs=mysql_query($sql);
$nvisite=mysql_num_rows($rs);
$ok=0;
$sql="SELECT * FROM prenotazioni WHERE DATA='$DATA'";
$rs=mysql_query($sql);
$nvisite=mysql_num_rows($rs);
for($i=0;$i<$nvisite;$i++)
{if(mysql_result($rs,$i,6)==$IDPAZIENTE and mysql_result($rs,$i,2)==$SPECIALIZZAZIONE) $ok=1;}
$sql="SELECT * FROM prenotazioni WHERE (FKSPECIALISTA='$IDMEDICO')AND(DATA='$DATA')";
$rs=mysql_query($sql);
$nvisite=mysql_num_rows($rs);
if($ok==1) echo"<h2><center>HAI GIA PRENOTATO QUESTA VISITA PER QUESTO GIORNO</center></h2>";
else if($nvisite>=5) echo"QUESTO MEDICO NON PUO' ESEGUIRE PIU' VISITE IN QUESTA GIORNATA";
     else {$strsql="INSERT INTO prenotazioni(DATA,SPECIALIZZAZIONE,TIPOVISITA,ASL,FKPAZIENTE,FKSPECIALISTA)";
           $strsql.="VALUES('$DATA','$SPECIALIZZAZIONE','$TIPOVISITA','$ASL','$IDPAZIENTE','$IDMEDICO')";
	       $ris=mysql_query($strsql) or die(mysql_error());
	       echo"<h2><center>VISITA PRENOTATA CON SUCCESSO</h2>";
		   echo"<br><center><br>Tra pochi secondi verrai reindirizzato automaticamente nella pagina 'I miei appuntamenti' dove potrai 
		        <br>visualizzare e controllare l'esito delle tue visite mediche con pochi semplici click. Se la pagina 
				<br>non dovesse aprirsi automaticamente puoi accedere ai tuoi appuntamenti <a href='Appuntamenti.php'>cliccando qua.</a>
	            <br><br></center>";}  		 	 
?>
 </table>
 </center>
 </body> 
</html>