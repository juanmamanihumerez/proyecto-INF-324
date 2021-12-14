
<div style="text-align:left; margin-left:100px; font-weight:bold; color:#023e8a">
FLUJO:<?php echo $flujo ?>
<br> 
PROCESO: <?php echo $proceso ?>
</div>
<?php
session_start();
include "conexion.inc.php";
$sql="select * from comite.frente"; //solo datos del usuario
$resultado=mysqli_query($conn, $sql);
?>
<div style="font-weight:bold;color:#9b2226">VOTACIÓN</div>
<BR>
<div style="font-weight:bold;color:#9b2226">SELECCIONE UNO DE LOS CANDIDATOS</div>
<br>
<style>
    table,tr,td{
        border:solid gray 5px;
		/*border-collapse:collapse;*/
		text-align:center;
		padding:30px 60px;
		margin:20px auto;
        color:#38b000;
        /*background:#f5cb5c;*/
    }
</style>

<?php
while($fila=mysqli_fetch_array($resultado))
{
	echo "<table><tr>";
	echo "<td><a href='votos.php?sigla=$fila[sigla]&flujo=$flujo&proceso=$proceso'>".$fila["sigla"]."<br>".$fila["frente"]."</a></td>";
	echo "</tr></table>";
}
?>
<br>
	

<br/><br>
<!--
Nombre:
<input type="text" name="namedocente" value=""/>
<br/>
-->