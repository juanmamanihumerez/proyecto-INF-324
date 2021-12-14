<?php
session_start();
include "conexion.inc.php";
$sql="select * from comite.frente f, comite.documentos d where f.usuario=d.usuario"; //datos de los frentes inscritos
$resultado=mysqli_query($conn, $sql);
?>
<?php
	include "cabecera.inc.php"; // incluimos la cabecera
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
	<H2 style="text-align:left; color:#006d77; margin-left:30px">MI BANDEJA<H2>
<table>
<tr>
	<th>Usuario</th>
	<th>Cert. Nac.</th>
	<th>Carnet de Identidad</th>
	<th>Matrícula</th>
	<th>Record</th>
	<th>Verificación</th>
	<th>Acción</th>
</tr>
<?php
while($fila=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>".$fila["usuario"]."</td>";
	echo "<td>".$fila["cn"]."</td>";
	echo "<td>".$fila["ci"]."</td>";
	echo "<td>".$fila["matricula"]."</td>";
	echo "<td>".$fila["record"]."</td>";
	echo "<td>".$fila["verificacion"]."</td>";
	echo "<td><a ";
	echo "href='modifica.si.php?usuario=$fila[usuario]'";// este link me llevará a actualizar el estado de verifiacion
	echo ">SI</a></br><a href='modifica.no.php?usuario=$fila[usuario]'>NO</a></td>";
	echo "</tr>";
}
?>
</table>