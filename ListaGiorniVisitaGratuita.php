<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuPaziente.htm");
?>
<center>
<table width="70%">	
<tr><td background="Immagini/sfondoFrame.png">
<?php
 $TIPOVISITA='GRATUITA';
 $specializzazione=$_POST['s'];
 $id=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db('cup') or die(mysql_error());
 $GIORNO=date("d");
 $MESE=date("m");
 $ANNO=date("Y");
 $sql="SELECT COUNT(IDPRENOTAZIONE),DATA,FKSPECIALISTA  FROM prenotazioni WHERE SPECIALIZZAZIONE='$specializzazione' group by DATA,FKSPECIALISTA";
 $rs=mysql_query($sql);
 $visite=mysql_num_rows($rs);
 $datadioggi=date("d-m-Y");
 $giornosettimana=date("w");
 echo"<center><br>SELEZIONA UNO DEI GIORNI DISPONIBILI PER EFFETTUARE LA TUA VISITA ".$specializzazione."<br>";
 echo"<b>(Le visite sono effettuate dal lunedi' al venerdi' esclusi il sabato e la domenica.)<br><BR></b>";
 for($x=0;$x<30;$x++)
 {
 $giornosettimana=$giornosettimana+1;
 if($giornosettimana>6) $giornosettimana=0;
 if($giornosettimana==0) $gs='DOMENICA';
 if($giornosettimana==1) $gs='LUNEDI';
 if($giornosettimana==2) $gs='MARTEDI';
 if($giornosettimana==3) $gs='MERCOLEDI';
 if($giornosettimana==4) $gs='GIOVEDI';
 if($giornosettimana==5) $gs='VENERDI';
 if($giornosettimana==6) $gs='SABATO';
 $GIORNO=$GIORNO+1;
 if($GIORNO>31){$GIORNO='01';
                $MESE=$MESE+1;}
 if($GIORNO=="1"){$GIORNO='01';}
 if($GIORNO=="2"){$GIORNO='02';}
 if($GIORNO=="3"){$GIORNO='03';}
 if($GIORNO=="4"){$GIORNO='04';}
 if($GIORNO=="5"){$GIORNO='05';}
 if($GIORNO=="6"){$GIORNO='06';}
 if($GIORNO=="7"){$GIORNO='07';}
 if($GIORNO=="8"){$GIORNO='08';}
 if($GIORNO=="9"){$GIORNO='09';}
 if($MESE=="1"){$MESE='01';}
 if($MESE=="2"){$MESE='02';}
 if($MESE=="3"){$MESE='03';}
 if($MESE=="4"){$MESE='04';}
 if($MESE=="5"){$MESE='05';}
 if($MESE=="6"){$MESE='06';}
 if($MESE=="7"){$MESE='07';}
 if($MESE=="8"){$MESE='08';}
 if($MESE=="9"){$MESE='09';}
 $DATA=$GIORNO.'-'.$MESE.'-'.$ANNO;
 $ok=true;
 for($i=0;$i<$visite;$i++)
 {if($DATA==mysql_result($rs,$i,1)) $ok=false;}
 if($giornosettimana==0) $ok=false;
 if($giornosettimana==6) $ok=false;
 if($ok==true) echo "<a href='PrenotaGratuita.php?DATA=$DATA&SPECIALIZZAZIONE=$specializzazione&TIPOVISITA=$TIPOVISITA'>Prenota la visita per ".$gs." ".$GIORNO."/".$MESE."/".$ANNO."<br></a>";
 }
?>
 <br><center><img src="Immagini/Prenota.jpg"><BR><br><br>
 </td></tr>
 </table> 
 </center>
 </body> 
</html>