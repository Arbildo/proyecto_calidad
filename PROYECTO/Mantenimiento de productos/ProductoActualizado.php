<HTML>
<HEAD>
<TITLE>Actualizar2.php</TITLE>
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>
<body background="../Mantenimiento de productos/fotos/fondo4.gif" >
<?
//Conexion con la base
mysql_connect("localhost","sanroque","45985301");

//selección de la base de datos con la que vamos a trabajar
mysql_select_db("panaderia");
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update producto Set Precio='$Precio' where Nombre='$Nombre'";
mysql_query($sSQL);
?>

<h1><div align="center">Producto Actualizado</div></h1>
<a href="ListarProductos.php"><img src="fotos/atraz.jpg" width='30' height='30' border='1'></a><b>

</BODY>
</HTML>
