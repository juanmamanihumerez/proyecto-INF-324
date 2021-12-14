
<div style="text-align:left; margin-left:100px; font-weight:bold; color:#023e8a">
FLUJO:<?php echo $flujo ?>
<br> 
PROCESO: <?php echo $proceso ?>
</div>


<div style="font-weight:bold;color:#9b2226">VERIFICACIÓN DE DOCUMENTOS</div>
<br>
<ul style="text-align:left; margin-left:300px; color:#006d77">
    
</ul>
<br>
<div style="font-weight:bold;color:#9b2226">¿CUMPLE CON TODOS LOS REQUISITOS?</div><br>
<label Style="font-size:24px;font-weight:bold;color:#2d6a4f">
<?php
$sql="select * from comite.documentos where usuario='".$_SESSION["usuario"]."' "; //solo datos del usuario
$re=mysqli_query($conn, $sql);
$f=mysqli_fetch_array($re);

$respuesta=$f['verificacion'];

$sql="select * from comite.frente where usuario='".$_SESSION["usuario"]."' "; //solo datos del usuario
$re=mysqli_query($conn, $sql);
$f=mysqli_fetch_array($re);
$frente=$f['frente'];

?>
<label Style="font-size:24px;font-weight:bold;color:#2d6a4f">
<?php
if($respuesta=="NN")
	echo 'Su trámite está en verificación.';
else	
	echo 'El frente: '.$frente.'. <br>'.$respuesta.' esta habilitado para participar en las elecciones';
?>
</label> <br><!--
Nombre:
<input type="text" name="namedocente" value=""/>
<br/>
-->