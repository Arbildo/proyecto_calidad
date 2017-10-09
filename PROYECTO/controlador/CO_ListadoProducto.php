<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
// Incluir la lógica del modelo
require('../modelo/EN_ListadoProducto.php');
// Obtener la lista de clientes
$productos = getTodosLosproductos();
// Incluir la lógica de la vista
require('../vistas/IU_ListadoProducto.php');
?>
</body>
</html>