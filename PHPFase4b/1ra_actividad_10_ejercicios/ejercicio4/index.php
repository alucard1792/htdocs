<!DOCTYPE html>
<html>
	<head>
		<title>ejercicio 4</title>
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
			echo "se va a plantar: pinos = ", $_GET['pinos'], "% oyamel = ", $_GET['oyamel'], "% cedro = ", $_GET['cedro'], "%";
		}

	 ?>

	</body>
</html>