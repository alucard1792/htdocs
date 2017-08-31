<!DOCTYPE html>
<html>
	<head>
		<title>ejercicio3</title>
	</head>
	
	<body>

	<form method="post" action="controlador.php">

		<p>
			<label for="numeroHectareas">Ingrese el tamaño del predio(m2): </label>
			<input type="number" name="numeroHectareas" id="numeroHectareas">
			<button type="submit">enviar</button>
		</p>

	</form>

	<?php 
		if (isset($_GET['pinos'])) {
			echo "se va a repartir la plantacion de la siguiente forma: pinos = ", $_GET['pinos'], "m2, oyamel = ", $_GET['oyamel'], "m2, cedro = ", $_GET['cedro'], "m2.<br>";

			echo "se van a sembrar: pinos = ", $_GET['numeroPinos'], ", oyamel = ", $_GET['numeroOyamel'], ", cedro = ", $_GET['numeroCedro'], ".<br>";

		}

	 ?>

	</body>
</html>