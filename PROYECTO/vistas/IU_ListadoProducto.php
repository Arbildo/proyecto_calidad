<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>


<body>
<h1>Listado de productos</h1>
<?php
$cn = mysql_connect("localhost","sanroque","45985301");
mysql_select_db("panaderia",$cn);
$rs = mysql_query("select * from producto",$cn);
while ($row = mysql_fetch_array($rs,MYSQL_ASSOC)){
 echo "<img src='fotos/".$row["Pro_codigo"].".JPG' width='162' height='183' border='1'><br>";
 echo "Codigo: ".$row["Pro_codigo"]."<br>";
 echo "Nombre: ".$row["Nombre"]."<br>";
 echo "Stock: ".$row["Stock"]."<br>";
 echo "Precio: ".$row["Precio"]."<br>";
 echo "Descuento: ".$row["Descuento"]."<br>";
 echo "Tipo: ".$row["Tipo"]."<br>";
 }
 mysql_free_result($rs);
 mysql_close($cn);
?>

</body>

</html>
