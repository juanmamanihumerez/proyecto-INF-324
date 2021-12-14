<div style="text-align:left; margin-left:100px; font-weight:bold; color:#023e8a">
FLUJO:<?php echo $flujo ?>
<br> 
PROCESO: <?php echo $proceso ?>
</div>
<div style="font-weight:bold;color:#9b2226">RESULTADOS DE VERIFICACIÓN VOTANTES</div>
<br>

<?php 

$usuario=$_SESSION['usuario'];

$sql="select * from comite.padron WHERE usuario='".$usuario."'"; //datos de los frentes inscritos
$res=mysqli_query($conn, $sql);
$fil=mysqli_fetch_array($res);

$resp=$fil['estado'];
?>

<br>
<div style="font-weight:bold;color:#9b2226">¿PUEDE VOTAR?</div><br>
<label Style="font-size:24px;font-weight:bold;color:#2d6a4f">
<?php
if($resp=='1')
	echo "El usuario: ".$usuario." está registrado en el padrón <br> Por lo tanto Puede votar";
else
	if($resp==null)
		echo "El usuario: ".$usuario." no está registrado en el padrón";
	else 
		echo "NO";
?> 

</label> <br>

<br/><br>