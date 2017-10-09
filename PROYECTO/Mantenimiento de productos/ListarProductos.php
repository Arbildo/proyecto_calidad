<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../css/FORM2.css" media="all" />
<style type="text/css">


#pro13 ul {margin:0 auto; padding:10px; list-style:none; white-space:nowrap; list-style:none; height:35px; position:relative; background:skyblue; font-size:11px;}
#pro13 li {margin:0; padding:0; float:left;}
#pro13 li a {display:block; float:left; height:35px; line-height:35px; color:black; text-decoration:none; font-family:arial, verdana, sans-serif; font-weight:bold; text-align:center; padding:0 0 0 15px; cursor:pointer; background:url(pro_13_0a.gif) no-repeat;}
#pro13 li a b {float:left; display:block; padding:0 30px 0 15px; background:url(pro_13_0b.gif) no-repeat right top;}
#pro13 li.current a {color:#cc0; background:url(pro_13_2a.gif) no-repeat; line-height:33px;}
#pro13 li.current a b {background:url(pro_13_2b.gif) no-repeat right top; padding-bottom:2px;}
#pro13 li a:hover {color:#ff0; background: url(pro_13_1a.gif) no-repeat; line-height:35px;}
#pro13 li a:hover b {background:url(pro_13_1b.gif) no-repeat right top;}
#pro13 li.current a:hover {color:#cc0; background: url(pro_13_2a.gif) no-repeat; cursor:default; line-height:33px;}
#pro13 li.current a:hover b {background:url(pro_13_2b.gif) no-repeat right top; padding-bottom:2px;}

</style>


<body>
<body background="../Mantenimiento de productos/fotos/fondo4.gif" >


<div id="pro13">
<ul>
<li><a href="InsertarProducto.php"><b>Ingresar</b></a></li>
<li><a href="BorrarProducto.php"><b>Borrar</b></a></li>
<li><a href="ActualizarProducto.php"><b>Actualizar</b></a></li>
<li><a href="CatalogoProductos.php"><b>Catalogo de productos</b></a></li>
<li><a href="../pro_13/pro_13.html"><b>Regresar al Menu Principal</b></a></li>
</ul>
</div>
</body>
</html>
<center>
  <form id="form2" name="form2" method="post" action="">
<center><H1> Listado productos</H1></center><p>
</p>
<?php
require "conexion.php";
$link=mysql_connect("localhost","sanroque","45985301");
mysql_select_db("panaderia",$link);
$result=mysql_query("SELECT Pro_codigo, Nombre, Stock, Precio, Descuento , Tipo  FROM producto",$link);
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
</div>
</form>
</center>

</body>
</html>
