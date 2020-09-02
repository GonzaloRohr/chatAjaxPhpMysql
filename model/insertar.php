<?php
	include('dbphp.php');
	$conexion=Database::conectar();

	if(isset($_POST['enviar'])){

		$nombre= htmlentities(addslashes($_POST['nombre']));
		$mensaje= htmlentities(addslashes($_POST['mensaje']));

		$consulta="INSERT INTO chat (nombre, mensaje) VALUES ('$nombre','$mensaje')";
		$ejecutar= $conexion->query($consulta);
	}

	header("Location:../view/index.php");
?>