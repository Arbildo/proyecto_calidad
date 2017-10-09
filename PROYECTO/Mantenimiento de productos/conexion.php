<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

function fn_connect( $bd, &$msg){

    $cn=mysql_connect('localhost', 'sanroque', '45985301');
	if (!$cn){

	       $msg = "Error en la conexion";
		}
		$n=mysql_select_db($bd, $cn);
		if (!$n){
		     $msg="BD no existe";
			 return 0;
		}
		Return $cn;
	}
function fn_fin($msg,$ret){
    if ($msg){
	    echo "<h4>$msg</h4>";
	}
	if ($ret){
	    echo '<p><input type="button" value="Retornar"
		onclick="history.back()"></p>';
	}
}

function say($cad)
{
	echo $cad;
}
?>
</body>

</html>
