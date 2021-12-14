
<div style="text-align:left; margin-left:100px; font-weight:bold; color:#023e8a">
FLUJO:<?php echo $flujo ?>
<br> 
PROCESO: <?php echo $proceso ?>
</div>
<div style="font-weight:bold;color:#9b2226">VERIFICACIÓN DE VOTOS</div>
<br>
<img src="verificaciondevotos.jpg" style="height:300px">
<br>
<?php
session_start();
$usuario=$_SESSION['usuario'];
$ci = $_POST['ci'];

$sql="SELECT sigla, COUNT(sigla) as votos FROM comite.votos GROUP BY sigla"; //datos de los frentes inscritos
$resultado4=mysqli_query($conn, $sql);
?>

<div class="content">
<table border="1" style="width: 100%">
<thead>
<tr>
	<th>Frente</th>
	<th>Número de Votos</th>
</tr>
</thead>
<?php
while($fila4=mysqli_fetch_array($resultado4))
{
	echo "<tbody><tr>";
	echo "<td>".$fila4["sigla"]."</td>";
	echo "<td>".$fila4["votos"]."</td>";
	echo "</tr></tbody>";
	$sql = "INSERT INTO comite.resultados VALUES('".$fila4["sigla"]."','".$fila4["votos"]."')";
	mysqli_query($conn, $sql);
}	
?>
</table>
</div>
