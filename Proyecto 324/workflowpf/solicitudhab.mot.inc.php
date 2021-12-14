<?php
session_start();
$usuario=$_SESSION['usuario'];
$ci = $_POST['ci'];

$sql="select * from comite.padron WHERE ci='".$ci."'"; //datos de los frentes inscritos
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);

$respuesta=$fila['estado'];

if($respuesta=='1')
	$respuesta="SI";
else
	$respuesta="NO";

?> 