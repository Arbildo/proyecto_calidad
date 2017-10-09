<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" type="text/css" href="../css/FORM.css" media="all" />
</head>

<body>
<center><h1>Listado de clientes</h1>
<table>
<tr>
<th>Código</th>
<th>Nombre</th>
<th>Apellido paterno</th>
<th>Apellido materno</th>
<th>DNI</th>
<th>RUC</th>
<th>Dirección</th>
<th>Teléfono</th>
<th>Distrito</th>
<th>Email</th>
</tr>

<?php foreach($clientes as $clientes): ?>
<tr>
<td><?php echo $clientes['Cli_codigo']?></td>
<td><?php echo $clientes['Nombre']?></td>
<td><?php echo $clientes['ApellidoPat']?></td>
<td><?php echo $clientes['ApellidoMat']?></td>
<td><?php echo $clientes['DNI']?></td>
<td><?php echo $clientes['RUC']?></td>
<td><?php echo $clientes['Direccion']?></td>
<td><?php echo $clientes['Telefono']?></td>
<td><?php echo $clientes['Distrito']?></td>
<td><?php echo $clientes['Email']?></td>
</tr>
<?php endforeach;?>
</table>
</center>
<br />
<br />
<br />
<center><a href=''><input type="button" value="Agregar" />
<a href='../pro_13/pro_13.html'><input type="button" value="Atras" /></center>
</body>
</html>