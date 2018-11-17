<?php
  $id=mysql_connect("localhost","root","")
   or die ("non riesco a creare la connessione"); //nel caso di connessione fallita
  MySQL_select_db("cup") //apre il DataBase
   or die ("Non trovo il DB");
   $NOMEUTENTE=$_POST['NOMEUTENTE'];
   $PASSWORD=$_POST['PASSWORD'];
   $PASSWORD=md5($PASSWORD);
   $Sql="SELECT IDPAZIENTE,NOMEUTENTE,PASSWORD FROM pazienti WHERE (NOMEUTENTE='$NOMEUTENTE') and (PASSWORD='$PASSWORD')";
   $rs=MySql_query($Sql) or die("Query fallita");
 
   $nrighe=MySql_num_rows($rs);   
  if ($nrighe>0)
  { $iduser=mysql_result($rs,0,0);
   MySql_close();
    session_start();
	$_SESSION['autorized']=1;
	$_SESSION['iduser']=$iduser;
	if (isset($_SESSION['autorized']))
    if ($_SESSION['autorized']!=1)
     {
      echo "<h1>Area riservata, accesso non consentito!!!</h1>";
	  include("LoginPaziente.php");
     }
    else
     {  
	  include("IndexPaziente.php");
     }
   }
   else{
     include("LoginFallito.php");
	}
?>