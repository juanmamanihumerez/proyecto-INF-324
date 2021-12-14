<?php
session_start();

include "conexion.inc.php";

$usuario=$_SESSION['usuario'];
$sigla=$_GET["sigla"];
$nvotos = 1;

//actualiza flujoproceso
	$sql = "INSERT INTO comite.votos VALUES('".$usuario."','".$sigla."',".$nvotos.")";
    if(mysqli_query($conn, $sql)){
        echo "Voto Registrado";
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conn);
    }
//Fin de actualiza
	

?>
