<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php session_start(); ?>
<html>
<body>

<?php
include("BarraMenuAdmin.htm");
if(!empty($_POST['scelta']))
 {$scelta=$_POST['scelta'];
  $id=mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("cup") or die(mysql_error());
 $_SESSION['scelta']=$scelta;
   
   $medici="SELECT * FROM medicidibase WHERE IDMEDICOBASE!='$scelta'";
   $set=mysql_query($medici);
   $nr=mysql_num_rows($set);
   if($nr>0)
   {$sel="SELECT * FROM pazienti WHERE FKMEDBAS='$scelta'";
   $rs=mysql_query($sel);
   $r=mysql_num_rows($rs);
   if($r>0)
       {print"<form method='post' action='DistribuisciPazienti.php'>";
		echo"<TABLE align=center><tr><td background='Immagini/sfondoFrame.png'><TR><TD>Scegli il nuovo medico di base, per i pazienti del medico cancellato:</td></tr><tr><td>";
		for($i=0;$i<$nr;$i++)
		 echo"<INPUT TYPE='RADIO' NAME='medi' VALUE='".MySql_result($set,$i,0)."'>".MySql_result($set,$i,2)."<BR>";
		echo"<tr><td background='Immagini/sfondoFrame.png'></TD></TR></TD></TR></TD></TR>";
		echo"</TABLE>";
		echo"<BR><CENTER><INPUT TYPE='submit' VALUE='INVIA'></CENTER></FORM>";
       }
else{$del="delete from medicidibase where medicidibase.IDMEDICOBASE='$scelta'";
     $record=mysql_query($del);
	 print"<table width='70%' background='Immagini/sfondoFrame.png' border='0' align='center'>";
     print"<tr><td colspan='3' align='center'><h2>OPERAZIONE COMPLETATA</h2></td></tr>";
	} 
  }
  else
  {$del="delete from medicidibase where medicidibase.IDMEDICOBASE='$scelta'";
     $record=mysql_query($del);
   $del2="delete from pazienti where FKMEDBAS='$scelta'";
     $record2=mysql_query($del2); 
	 print"<table width='70%' background='Immagini/sfondoFrame.png' border='0' align='center'>";
     print"<tr><td colspan='3' align='center'><h2>OPERAZIONE COMPLETATA</h2></td></tr>";
	} 
}

else print("Nessuna Scelta");
?>
 </body>
</html>