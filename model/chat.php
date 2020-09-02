<?php
	require("dbphp.php");

	$conexion=Database::conectar();
	$consulta= "select * from chat order by id desc";
	$ejecutar= $conexion->query($consulta);

	while($fila= $ejecutar->fetch(PDO::FETCH_ASSOC)):
?>

<div id="datos-chat">
	<span style="color: #1c62c4;"><?php echo $fila['nombre']; ?>: </span>
	<span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
	<span style="float: right;"><?php echo date('g:i a', strtotime($fila['fecha'])); ?></span>
</div>

<?php endwhile; ?>