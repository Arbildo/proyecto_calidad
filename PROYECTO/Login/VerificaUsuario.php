<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/FORM.css" media="all" />
<body background="../Mantenimiento de productos/fotos/fondo4.gif" >
<form>
<?php

 $host_db = "localhost";
 $user_db = "sanroque";
 $pass_db = "45985301";

 $conexion = mysql_connect($host_db, $user_db, $pass_db);

 mysql_select_db(panaderia, $conexion) or die("No se puede seleccionar la base de datos.");;

 $buscarUsuario = "SELECT * FROM usuarios WHERE usuario = '$_POST[usuario]' ";

 $result = mysql_query($buscarUsuario);

 $count = mysql_num_rows($result);

 if ($count == 1){
 echo "<br />". "El Nombre de Usuario ya Existe en nuestra Base de Datos!" . "<br />";

echo "<a href='RegistrarUsuario.html'>Escoger otro Nombre de Usuario</a>";

exit;
 }
 else{

 $query = "INSERT INTO usuarios (usuario, password) VALUES ('$_POST[usuario]', '$_POST[password]')";

 if (!mysql_query($query, $conexion))
 {
 die('Error: ' . mysql_error());
 echo "Error al crear el usuario." . "<br />";
 }

 else{
 echo "<center><font face='Arial, Helvetica, sans-serif'><br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4></font></center>";
 }

 }

 mysql_close($conexion)

?>
<form>
<br />
<center><a href='MENUPRINCIPAL.html'><input type="button" value="Atras" /></a></center>

</body>
</html>
