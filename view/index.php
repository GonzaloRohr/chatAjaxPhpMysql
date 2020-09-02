<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chat con ajax, php y mysql</title>

	<link rel="stylesheet" type="text/css" href="hojaEstilos.css">

	<!-- fuente -->
	
	<script>
		setInterval(function(){ajax();}, 1000);
	</script>
</head>
<body onload="ajax();">

<div id="contenedor">

	<div id="caja-chat">
		<div id="chat">

		</div>
	</div>

	<form method="POST" action="../model/insertar.php">
		<input type="text" name="nombre" placeholder="ingresar tu nombre">
		<textarea name="mensaje" placeholder="ingresar tu mensaje"></textarea>
		<input type="submit" name="enviar" value="enviar">
	</form>
</div>

<script src="hojascript.js"></script>
</body>
</html>