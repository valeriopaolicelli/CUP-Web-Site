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
 $DATA=$_GET['DATA'];
 $SPECIALIZZAZIONE=$_GET['SPECIALIZZAZIONE'];
 $TIPOVISITA=$_GET['TIPOVISITA'];
 $IDPAZIENTE=$_SESSION['iduser'];
 $id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db('cup') or die(mysql_error());
 $sql="SELECT COUNT(IDSPECIALISTA),IDSPECIALISTA FROM medicispecialisti WHERE SPECIALIZZAZIONE='$SPECIALIZZAZIONE' GROUP BY SPECIALIZZAZIONE";
 $rs=mysql_query($sql);
 $IDMEDICO=mysql_result($rs,0,1);
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
 {if(mysql_result($rs,$i,4)==$IDPAZIENTE and mysql_result($rs,$i,2)==$SPECIALIZZAZIONE) $ok=1;}
 $sql="SELECT * FROM prenotazioni WHERE (FKSPECIALISTA='$IDMEDICO')AND(DATA='$DATA')";
 $rs=mysql_query($sql);
 $nvisite=mysql_num_rows($rs);
 if($ok==1) echo"<h2>HAI GIA PRENOTATO QUESTA VISITA PER QUESTO GIORNO</h2>";
 else if($nvisite>=5) echo"QUESTO MEDICO NON PUO' ESEGUIRE PIU' VISITE IN QUESTA GIORNATA";
      else{$strsql="INSERT INTO prenotazioni(DATA,SPECIALIZZAZIONE,TIPOVISITA,ASL,FKPAZIENTE,FKSPECIALISTA)";
           $strsql.="VALUES('$DATA','$SPECIALIZZAZIONE','$TIPOVISITA','$ASL','$IDPAZIENTE','$IDMEDICO')";
	       $ris=mysql_query($strsql) or die(mysql_error());
	       echo"<h2><center>VISITA PRENOTATA CON SUCCESSO</center></h2>";}  		 	 
?>
 </table>
 </center>
 </body> 
</html>