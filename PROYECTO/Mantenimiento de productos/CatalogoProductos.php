<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

<link rel="stylesheet" type="text/css" href="../css/FORM2.css" media="all" />
</head>
<body background="../Mantenimiento de productos/fotos/fondo4.gif" >

<form>
<center><h1>Catálogo de Productos</h1></center>
<?php
require "conexion.php";
$cn = fn_connect("panaderia",$msg);
$rs = mysql_query("select * from producto",$cn);
say("<table>");
say("<tr>");
say("<th ><font face='Arial Black, Gadget, sans-serif' size='4'>Producto</font></th>");
say("<th><font face='Arial Black, Gadget, sans-serif' size='4'>Descripcion</font></th>");
say("</tr>");
while ($row = mysql_fetch_array($rs,MYSQL_ASSOC)){
 say("<tr>");
 say("<td>");
 say("<img src='fotos/".$row["Pro_codigo"].".JPG' width='200' height='200' border='1'><br>");
 say("</td>");
 say("<td>");
 say("<font face='Arial Black, Gadget, sans-serif'>Codigo de Producto: ".$row["Pro_codigo"]."</font>"."<br>");
 say("<font face='Arial Black, Gadget, sans-serif'>Nombre : ".$row["Nombre"]."<br>");
 say("<font face='Arial Black, Gadget, sans-serif'>Stock: ".$row["Stock"]."<br>");
 say("<font face='Arial Black, Gadget, sans-serif'>Precio: ".$row["Precio"]."<br>");
 say("<font face='Arial Black, Gadget, sans-serif'>Descuennto: ".$row["Descuento"]."<br>");
 say("<font face='Arial Black, Gadget, sans-serif'>Tipo: ".$row["Tipo"]."<br>");
 say("</td>");
 say("</tr><p>");
 }
 say("</table>");
 mysql_free_result($rs);
 mysql_close($cn);
?>



</form></center>
<center><a href='ListarProductos.php'><input type="button" value="Atras" /></a></center>

</body>
