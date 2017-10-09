<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
<HEAD>
<TITLE>Actualizar1.php</TITLE>
<link rel="stylesheet" type="text/css" href="../css/FORM.css" media="all" />
</HEAD>
<div align="center">

<br>
<body background="../Mantenimiento de productos/fotos/fondo4.gif" >
<?php
//Conexion con la base
$bd=mysql_connect("localhost","sanroque","45985301");

//selección de la base de datos con la que vamos a trabajar
mysql_select_db("panaderia",$bd);
echo'<font face="Arial, Helvetica, sans-serif"><h1>Actualizar el precio de un producto</h1>';
echo '<FORM METHOD="POST" ACTION="ProductoActualizado"> Nombre';

//Creamos la sentencia SQL y la ejecutamos
$result=mysql_query('SELECT * From producto order by Nombre',$bd);
//($sSQL);

echo '<select name="Nombre : ">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{
  ?>
  <option value=" <?php echo $row['Pro_codigo'] ?> " >

  <?php echo $row['Nombre']; ?>

  </option>

<?php
}
?>

</select>


<br>
Nuevo Precio del producto<br>
<INPUT TYPE="TEXT" NAME="Precio"><br>
<INPUT TYPE="SUBMIT" value="Actualizar">
<a href='ListarProductos.php'><input type="button" value="Atras" />
</FORM>
</div>

<div id="pro13">



</BODY>
</HTML>
