<?php
session_start();
$cn = $_FILES['cn']['name'];
$ci = $_FILES['ci']['name'];
$mat = $_FILES['matricula']['name'];
$rec = $_FILES['record']['name'];
$cert = $_FILES['certfinanciera']['name'];
$npro = $_FILES['noproceso']['name'];
$rejap = $_FILES['rejap']['name'];
$ant = $_FILES['antecedentes']['name'];
$estado='NN';

$usuario=$_SESSION['usuario'];

$fecha = date('Y-m-d h:i:s'); //captura fecha actual

//Realizamos la inserción en base de datos del formulario inscripción

	$sql = "INSERT INTO comite.documentos VALUES('".$cn."','".$ci."','".$mat."','".$rec."','".$cert."','".$npro."','".$rejap."','".$ant."','".$usuario."','".$estado."')";
         
		 if (mysqli_query($conn, $sql)) {
                echo "Archivo subido";            }
         else {
            echo "Falla al subir archivo";
			}
    // hasta aqui la insripcion

//actualiza flujoproceso
	$sql = "UPDATE seguimiento SET proceso='P4', fechafin='".$fecha."' WHERE usuario='".$usuario."' AND proceso='P2'";
    if(mysqli_query($conn, $sql)){

        echo "Registro actualizado.";
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conn);
    }
//Fin de actualiza
	

?>