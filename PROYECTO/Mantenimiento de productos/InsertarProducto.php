<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

<link rel="stylesheet" type="text/css" href="../css/FORM2.css" media="all" />
</head>
<body background="../Mantenimiento de productos/fotos/fondo4.gif" >
<div align="center">

<br>
<center>
<form id="form1" name="form1" method="post" action="" >
<div aling="center">
<h1>Insertar un nuevo Producto</h1>
Codigo de producto
<input type="text" name="Pro_codigo" id="Pro_codigo" value="<?php echo $_POST["Pro_codigo"] ?>" ><br>
Nombre Producto
<INPUT type="text" name="Nombre" id="Nombre" value="<?php echo $_POST["Nombre"] ?>" ><br>
Stock
<INPUT type="text" name="Stock" id="Stock" value="<?php echo $_POST["Stock"] ?>" ><br>
Precio
<INPUT type="text" name="Precio" id="Precio" value="<?php echo $_POST["Precio"] ?>" ><br>
Descuento
<INPUT type="text" name="Descuento" id="Descuento" value="<?php echo
 $_POST["Descuento"] ?>" >
Tipo<br>
<INPUT type="text" name="Tipo" id="Tipo" value="<?php echo
 $_POST["Tipo"] ?>" ><br>
<br><br>
</div>
<div aling="center">
<input type="SUBMIT" value="Insertar"  id="insertar">
<a href='ListarProductos.php'><input type="button" value="Atras" /></a>
</div></FORM></div>
</center>
</body>
</html>
<?php
require "conexion.php";
$link=mysql_connect("localhost","sanroque","45985301");
mysql_select_db("panaderia",$link);
if (!empty($_POST['Tipo'])){
$query="INSERT INTO producto values ('".$_POST["Pro_codigo"]."','".$_POST["Nombre"]."','".$_POST["Stock"]."','".$_POST["Precio"]."','".$_POST["Descuento"]."','".$_POST["Tipo"]."')";
mysql_query($query, $link);
if (!empty($_POST['Tipo'])){
echo "<script>alert('Producto agregado exitosamente')</script>";
}
echo "<script>location.href='ListarProductos.php';</script>";
}
?>
