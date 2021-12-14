<?php
session_start();

include "conexion.inc.php";

$usuario=$_GET["usuario"];


//actualiza flujoproceso
	$sql = "UPDATE comite.documentos SET verificacion='NO' WHERE usuario='".$usuario."' ";
    if(mysqli_query($conn, $sql)){
        header("Location: bandeja.comite.php");
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conn);
    }
//Fin de actualiza
	

?>