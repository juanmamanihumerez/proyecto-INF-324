<?php
session_start();

include "conexion.inc.php";

$usuario=$_SESSION['usuario'];
$sigla=$_GET["sigla"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$nvotos = 1;

$sql="select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
    $resultado=mysqli_query($conn, $sql);
    $fila=mysqli_fetch_array($resultado);
    $procesosiguiente=$fila["procesosiguiente"];

//actualiza flujoproceso	
	$sql="SELECT usuario FROM comite.votos WHERE usuario='".$usuario."' "; //datos de los frentes inscritos
	$resultado5=mysqli_query($conn, $sql);
	$fila5=mysqli_fetch_array($resultado5);

	if($fila5==null)
	{
		$sql = "INSERT INTO comite.votos VALUES('".$usuario."','".$sigla."',".$nvotos.")";
		if(mysqli_query($conn, $sql))
		{
        echo "Voto Registrado";
		} else 
		{
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conn);
		}
	}
	
	
	header ('Location:desflujo.php?flujo='.$flujo.'&proceso='.$procesosiguiente);
//Fin de actualiza
	

?>