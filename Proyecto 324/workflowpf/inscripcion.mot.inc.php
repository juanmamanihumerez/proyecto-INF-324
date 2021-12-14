<?php
session_start();
$frente=$_POST["frente"]; // recibimos los datos de inscrpción que está en "inscrpcion.inc.php"
$sigla=$_POST["sigla"];
$colores=$_POST["colores"];
$candidato=$_POST["candidato"];
$usuario=$_SESSION['usuario'];
$fecha = date('Y-m-d h:i:s');  

//Realizamos la inserción en base de datos del formulario inscripción

	$sql="insert into comite.frente values('".$usuario."','".$frente."','".$sigla."','".$colores."','".$candidato."')";
   if (mysqli_query($conn, $sql)) {
		  echo "Insertado con éxito";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    // hasta aqui la insripcion

//actualiza flujoproceso
/*	$sql = "UPDATE seguimiento SET proceso='P3', fechafin='".$fecha."' WHERE usuario='".$usuario."' AND proceso='P2'";
    if(mysqli_query($conn, $sql)){

        echo "Registro actualizado.";
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conn);
    }
*/
//Fin de actualiza
	

?>