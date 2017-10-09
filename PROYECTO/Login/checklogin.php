
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body background="../Mantenimiento de productos/fotos/fondo4.gif" >


<!DOCTYPE html>
<html lang="en">

<head>
 <title>Check Login</title>
 <meta charset = "utf8" />
</head>

<body>

<?php
 $host_db = "localhost";
 $user_db = "sanroque";
 $pass_db = "45985301";
 $db_name = "panaderia";
 $tbl_name = "usuarios";

// Connect to server and select databse.
mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");

mysql_select_db("$db_name")or die("Cannot Select Data Base");

// sent from form
$username = $_POST['usuario'];
$password = $_POST['password'];

$sql= "SELECT usuario,password FROM $tbl_name WHERE usuario = '$username' and password = '$password'";

$result=mysql_query($sql);

// counting table row
$count = mysql_num_rows($result);
// If result matched $username and $password

  if($count == 1 ){

   $_SESSION['loggedin'] = true;
   $_SESSION['username'] = $username;
   $_SESSION['start'] = time();
   $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

  echo "<center><font face='Arial, Helvetica, sans-serif' size='7'>  BIENVENIDO USUARIO: " . $username."</FONT></CENTER>";
  echo "<center><a href='../pro_13/pro_13.html'><img src='../Mantenimiento de productos/fotos/IR.gif'</a><font face='Arial Black, Gadget, sans-serif'color='black'><h2>CLICK AQUÍ</h2></font>></center>";
  }
 else {
 echo "<br/>Username o Password estan incorrectos.<br>";

 echo "<a href='main_login.html'>Volver a Intentarlo</a>";
}

?>

</body>
</html>
