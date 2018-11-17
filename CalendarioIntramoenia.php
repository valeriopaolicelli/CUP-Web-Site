<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
include("barraMenuPaziente.htm");
?>
<center>
<table width="70%">
   <tr>
    <td background="Immagini/sfondoFrame.png">
  <CENTER>
   <?php
    $specializzazione=$_GET['specializzazione'];
	$x=$_GET['x'];
	if($x=='1')	$medico=$_POST['m'];
	else $medico=$_GET['medico'];
	$x='0';
	$m=$_GET['mese'];
    $a=$_GET['anno'];
    $mesi= array ("Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre");
    $ng=31;
    if($m==3 or $m==5 or $m==8 or $m==10)  {$ng-=1;}
    if($m==1) {$ng-=3;}
    $c=$a%4;
    if($c==0 and $m==1){$ng+=1;}
    $c=$a%100;
    $v=$a%400;
     if($c==0 and $v!=0){$ng-=1;} 

     echo"<BR><TABLE BORDER=5><TR>";
      echo"<TD colspan=7><center><B><h3>";
      if($m<>0)
       {
         echo"<A  href=\"calendarioIntramoenia.php?mese=".($m-1)."&anno=".$a."&specializzazione=".$specializzazione."&medico=".$medico."&x=".$x."\" ><img src='Immagini/frecciaSx.png' border=0></A>"." ".$mesi[$m];

       }
      else
       {echo"<A  href=\"calendarioIntramoenia.php?mese=11&anno=".($a-1)."&specializzazione=".$specializzazione."&medico=".$medico."&x=".$x."\" ><img src='Immagini/frecciaSx.png' border=0></A>"." ".$mesi[$m];}
      if($m<>11) {echo"<A href=calendarioIntramoenia.php?mese=".($m+1)."&anno=".$a."&specializzazione=".$specializzazione."&medico=".$medico."&x=".$x."><img src='Immagini/frecciaDx.png' border=0></A>";}
      else  {echo"<A href=calendarioIntramoenia.php?mese=0&anno=".($a+1)."&specializzazione=".$specializzazione."&medico=".$medico."&x=".$x."><img src='Immagini/frecciaDx.png' border=0></A>";}
      echo" "."<A  href=\"calendarioIntramoenia.php?mese=".($m)."&anno=".($a-1)."&specializzazione=".$specializzazione."&medico=".$medico."&x=".$x."\" ><img src='Immagini/frecciaSx.png' border=0></A>"." ".$a;
      echo"<A  href=\"calendarioIntramoenia.php?mese=".($m)."&anno=".($a+1)."&specializzazione=".$specializzazione."&medico=".$medico."&x=".$x."\" ><img src='Immagini/frecciaDx.png' border=0></A>";
      echo"</TD></TR></h3> ";
    $mese=((int)date("m"))-1;
    $giorno=((int)date("d"));
    $anno=(int)(date("Y"));
    $data=mktime(0,0,0,$m+1,1,$a);
    $sett=date("w",$data);

    if($sett==0){$sett=7;}//perche se set è uguale a 0 vuol dire che stiamo a domenica
     echo"<TD><i><B>Lu</TD><TD><i><B>Ma</TD><TD><i><B>Me</TD><TD><i><B>Gi</TD><TD><i><B>Ve</TD><TD><i><B>Sa</TD><TD><i><B>Do</TD></TR></i>";
      for($i=0;$i<$sett-1;$i++) {echo"<TD></TD>";}  //serve per portare il primo giorno del mese al giorno giusto
       $i=1;
       $j=$sett-1;
        while($i<=$ng )
         {if($j==7)
          {echo"</TR><TR>";
           $j=0;
          }
       echo"<TD><center>";
      if($i==$giorno and $m==$mese and $a==$anno) //controllo se il giorno è quello di oggi
       {echo"<I><B>";}
    if($a>$anno)  echo"<A HREF=PrenotaIntramoenia.php?giorno=".$i."&mese=".$m."&anno=".$a."&specializzazione=".$specializzazione."&medico=".$medico.">".$i."</A></TD>";
    else if($a==$anno and $m>$mese )
        {
         echo"<A HREF=PrenotaIntramoenia.php?giorno=".$i."&mese=".$m."&anno=".$a."&specializzazione=".$specializzazione."&medico=".$medico.">".$i."</A></TD>";
        }
     else if($m<=$mese and $a==$anno and $i>$giorno) {echo"<A HREF=PrenotaIntramoenia.php?giorno=".$i."&mese=".$m."&anno=".$a."&specializzazione=".$specializzazione."&medico=".$medico.">".$i."</A></TD>";}
      else echo $i;
         $i+=1;
         $j+=1;

     }
     echo"</TABLE>";
   ?>
<br><br><h3><i>Cliccare su una data per effettuare una prenotazione.</h3></i>
</CENTER>
</i></u></center>
</td></tr>
  </table> 
  </center>
 </body> 
</html> 