<html>
 
 <head>
  <title>Accesso eseguito</title>
  <link rel="stylesheet" style="text/css" href="ssfondo.css">
  <link rel="stylesheet" style="text/css" href="stile.css">
 </head>

 <body>
  <?php
   $flag=$_GET['flag'];
   if (isset($_SESSION['autorized']))
    if ($_SESSION['autorized']!=1)
     {
      echo "<h1>Area riservata, accesso non consentito!!!</h1>";
      die();
     }
    else
     {
      echo "Benvenuto<BR>";
      //session_destroy(); //chiude la sessione

      echo"<h2>Accesso eseguito come</h2>:".$flag;
     }
   else
    die();
  ?>
 </body>

</html>