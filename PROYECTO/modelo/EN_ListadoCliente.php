<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
function getTodosLosclientes()
{
// Conectar con la base de datos y seleccionarla
$conexion = mysql_connect('localhost', 'sanroque', '45985301');
mysql_select_db('panaderia', $conexion);
// Ejecutar la consulta SQL
$resultado = mysql_query('SELECT Cli_codigo, Nombre, ApellidoPat, ApellidoMat, DNI, RUC, Direccion, Telefono, Distrito, Email FROM cliente', $conexion);
// Crear el array de elementos para la capa de la vista
$clientes = array();
while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
{
$clientes[] = $fila;
}
// Cerrar la conexión
mysql_close($conexion);
return $clientes;
}
?>
</body>
</html>
