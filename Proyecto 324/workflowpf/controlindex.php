<?php

// me verifica que los datos del usuario están en la BD y me lleva a mi bandeja de entrada. sino, se mantiene en el mismo
include "conexion.inc.php";
$usuario=$_GET["usuario"];
$contrasenia=$_GET["contrasenia"];
$sql="select * from usuarios where usuario='".$usuario;
$sql.="' and contrasenia='".$contrasenia."'";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
if ($fila["usuario"]==$usuario and $fila["contrasenia"]==$contrasenia)
{
	session_start();//iniciamos la sesión
	$_SESSION["usuario"]=$usuario;
	if($fila["rol"]=='C')
	{
		header("Location: bandeja.comite.php");
	}else
	{
		if ($fila["rol"]=='F')
		{
			header("Location: bandeja.php");	
		}
		else
		{
			if ($fila["rol"]=='E')
				header("Location:desflujo.php?flujo=F1&proceso=P7");	
			else
				header("Location:index.php");
		}
	
		
	}
	
}
else
{
	header("Location: index.php");
}
?>
