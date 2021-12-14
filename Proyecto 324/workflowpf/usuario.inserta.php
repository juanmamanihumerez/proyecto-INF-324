<?php
$usuario=$_GET["usuario"];
$contrasenia=$_GET["contrasenia"];
$rol=$_GET["rol"];

include "conexion.inc.php";

$sql = "INSERT INTO usuarios VALUES('".$usuario."','".$contrasenia."','".$rol."')";
    if(mysqli_query($conn, $sql))
        header ('Location:index.php');
    else 
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conn);
    
?>
