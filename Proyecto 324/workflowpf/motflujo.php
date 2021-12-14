<?php
session_start();
	include "conexion.inc.php";
	$flujo=$_POST["flujo"];
	$proceso=$_POST["proceso"]; //este es el proceso actual
	$formulario=$_POST["formulario"];//recupero el formulario
	include $formulario.".mot.inc.php"; // me incluye los archivos ....mot.inc.php
	include $formulario.".inc.php";
//desde aqui es el cambio para que haga "siguiente" y "atrás"
	
  if (isset($_POST["Siguiente"]))
  {
    $sql="select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
    $resultado=mysqli_query($conn, $sql);
    $fila=mysqli_fetch_array($resultado);
    $procesosiguiente=$fila["procesosiguiente"];
    //header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);
	
	///////////////////////////// Esto me trabaja en flujo condicionante////////////////////
	if ($procesosiguiente==null && $fila["tipo"]=='C')
		{
			$sql="select * from flujocondicionante where flujo='".$flujo."' and proceso='".$proceso."'";
			$resultado2=mysqli_query($conn, $sql);
			$fila2=mysqli_fetch_array($resultado2);
			
			if ($respuesta=='SI')
				$procesosiguiente=$fila2["Si"];
			else 
				$procesosiguiente=$fila2["No"];
		}
		echo $procesosiguiente;
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);


	//////////////////////////////////////////////////////////////////////////////////////////
  }
  else
  { $sql="select * from usuarios where usuario='".$_SESSION["usuario"]."'";
				$resultado3=mysqli_query($conn, $sql);
				$fila3=mysqli_fetch_array($resultado3);
				$rol=$fila3['rol'];
	if($rol=='E')
	{
		$proceso='P7';
	}
	else
	{
		$sql="select * from flujoproceso where flujo='".$flujo."' and procesosiguiente='".$proceso."'";
	//hago referencia al procesosiguiente anterior (me sacará la fila anterior. es decir el proceso anterior)
    $resultado=mysqli_query($conn, $sql);
    $fila=mysqli_fetch_array($resultado);
    $proceso=$fila["proceso"];
	}
					
    
    header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso);
  }

//hasta aqui es el cambio
	
	?>