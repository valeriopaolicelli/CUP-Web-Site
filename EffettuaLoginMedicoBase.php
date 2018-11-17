<?php
  $id=mysql_connect("localhost","root","") or die ("non riesco a creare la connessione"); //nel caso di connessione fallita
  MySQL_select_db("cup") or die ("Non trovo il DB");
  $USERNAME=$_POST['Username'];
  $PASSWORD=$_POST['Chiave'];
  $PASSWORD=md5($PASSWORD);
  $Sel="SELECT IDMEDICOBASE FROM medicidibase WHERE (PASSWORD='$PASSWORD') and (NOMEUTENTE='$USERNAME')";
  $record=mysql_query($Sel) or die("Query IDMEDICOBASE fallita");

  $Sql="SELECT NOMEUTENTE,PASSWORD FROM medicidibase WHERE (PASSWORD='$PASSWORD') and (NOMEUTENTE='$USERNAME')";
  $rs=MySql_query($Sql) or die("Query fallita");
  $nrighe=MySql_num_rows($rs);   
  if ($nrighe>0)
  { MySql_close();
    session_start();
	  $IDMEDICOBASE=mysql_result($record,0,0);
	$_SESSION['autorized']=1;
	$_SESSION['IDMEDICOBASE']=$IDMEDICOBASE;
   if (isset($_SESSION['autorized']))
    if ($_SESSION['autorized']!=1)
     {
      echo "<h1>Area riservata, accesso non consentito!!!</h1>";
	  die();
      include("LoginMedicoBase.php");
     }
    else
     {
	  include("IndexMedBase.php");
     }
  
  }
   else
    {include("LoginFallito.php");}
?>