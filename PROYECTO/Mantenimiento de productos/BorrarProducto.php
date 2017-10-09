<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="../css/FORM2.css" media="all" />
</head>
<center>
<form id="form2" name="form2" method="post" action="">
<center><H1> Eliminar Productos</H1></center>
Ingrese codigo del producto a Eliminar
<input type="text" id="Pro_codigo" name="Pro_codigo"/>
<p></p>
<?php
require "conexion.php";
if (!empty($_POST['Pro_Codigo'])){
$codi = "where Pro_codigo=".$_POST["Pro_codigo"];
}else{
$codi = "";}
$link=mysql_connect("localhost","sanroque","45985301");
mysql_select_db("panaderia",$link);
$result=mysql_query("SELECT Pro_codigo, Nombre, Stock, Precio, Descuento , Tipo  FROM producto".$codi,$link);
echo "<table border='1'><p>";
echo "<tr><p>";
echo "<th><b>Codigo de producto</b></th>";
echo "<th><b>Nombre del producto</b></th>";
echo "<th><b>Stock</b></th>";
echo "<th><b>Precio</b></th>";
echo "<th><b>Descuento</b></th>";
echo "<th><b>Tipo</b></th>";
echo "</tr><p>";
while ($row=mysql_fetch_row($result)){
echo "<tr><p>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "</tr><p>";
}
echo "</table><p>";
?>
<div aling="center">
<INPUT TYPE="SUBMIT" value="Borrar"  id="Borrar">
<a href='ListarProductos.php'><input type="button" value="Atras" />
</div></FORM></div>
</center>
</body>
</html>
<?
$link=mysql_connect("localhost","sanroque","45985301");
mysql_select_db("panaderia",$link);
if (!empty($_POST['Pro_codigo'])){
$var=$_POST['Pro_codigo'];
$query="DELETE FROM producto WHERE Pro_codigo = '$var'";
mysql_query($query, $link);
if (!empty($_POST['Pro_codigo'])){
$codi = "";
$result=mysql_query("SELECT Pro_codigo, Nombre, Stock, Precio, Descuento , Tipo  FROM producto".$codi,$link);
echo "<script>location.href='ListarProductos.php';</script>";
}
}
?>

<body background="../Mantenimiento de productos/fotos/fondo4.gif" >
</body>
</html>
