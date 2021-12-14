
<div style="text-align:left; margin-left:100px; font-weight:bold; color:#023e8a">
FLUJO:<?php echo $flujo ?>
<br> 
PROCESO: <?php echo $proceso ?>
</div>
<div style="font-weight:bold;color:#9b2226">FRENTES HABILITADOS PARA LA ELECCIÓN DEL C.E.I</div>
<br>

<?php
session_start();
include "conexion.inc.php";
$sql="select * from comite.frente"; //datos de los frentes inscritos
$resultado=mysqli_query($conn, $sql);
?>

<style>
	table{
		margin:auto; /* para alinearlo al centro */
	}
	table,th,td{
		border:solid gray;
		border-collapse:collapse;
		text-align:center;
		padding:10px 50px;
		margin
		
	}
	th{
		font-weight:bold;
		color:white;
		background:#1d3557;
	}
	</style>
	<H2 style="text-align:left; color:#006d77; margin-left:30px">LISTA DE FRENTES <H2>
<table>
<tr>
	<th>Frente</th>
	<th>Sigla</th>
	<th>Colores</th>
	<th>Candidato</th>
</tr>
<?php
while($fila=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>".$fila["frente"]."</td>";
	echo "<td>".$fila["sigla"]."</td>";
	echo "<td>".$fila["colores"]."</td>";
	echo "<td>".$fila["candidato"]."</td>";
	echo "</tr>";
}
?>
</table>

<br>
<br/><br>
<!--
Nombre:
<input type="text" name="namedocente" value=""/>
<br/>
-->