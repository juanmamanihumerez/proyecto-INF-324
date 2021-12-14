<div style="text-align:left; margin-left:100px; font-weight:bold; color:#023e8a">
FLUJO:<?php echo $flujo ?>
<br> 
PROCESO: <?php echo $proceso ?>
</div>

<br>
<div style="font-weight:bold;color:#9b2226">RESULTADOS FINALES DE LAS ELECCIONES DEL C.E.I </div>
<br>
<?php
session_start();
$usuario=$_SESSION['usuario'];
$ci = $_POST['ci'];

$sql="SELECT sigla, total FROM comite.resultados WHERE total=(SELECT MAX(total) FROM comite.resultados)"; //datos de los frentes inscritos
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
$fila4=mysqli_fetch_array($resultado4);
	echo "<tbody><tr>";
	echo "<td>".$fila4["sigla"]."</td>";
	echo "<td>".$fila4["total"]."</td>";
	echo "</tr></tbody>";
?>
</table>
</div>

<br/> <br>