<div style="text-align:left; margin-left:100px; font-weight:bold; color:#023e8a">
FLUJO:<?php echo $flujo ?>
<br> 
PROCESO: <?php echo $proceso ?>
</div>
<div style="font-weight:bold;color:#9b2226">VERIFICACIÓN DE VOTANTES</div>
<br>

<?php 

include "conexion.inc.php";

$ci=$_POST['ci'];;

$sql="select * from comite.padron WHERE ci='".$ci."'"; //datos de los frentes inscritos
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);

$res=$fila['estado'];
if($res=='1')
{$resultado="Habilitado";
}
else{
	$resultado="No Habilitado";
}
?> 


<br>
<div style="font-weight:bold;color:#9b2226">¿PUEDE VOTAR?</div><br>
<label Style="font-size:24px;font-weight:bold;color:#2d6a4f"><?php echo $hab; ?>
</label> <br>

<br/><br>