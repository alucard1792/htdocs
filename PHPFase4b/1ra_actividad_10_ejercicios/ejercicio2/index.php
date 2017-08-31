<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 2</title>
</head>
<body>

	<form method="post" action="controlador.php">
		<label for="salario">Ingrese su salario: </label>
		<input type="number" name="salario" id="salario">

		<label for="valorInmueble">Ingrese el valor del inmueble: </label>
		<input type="number" name="valorInmueble" id="valorInmueble">

		<button type="submit">enviar</button>
		
	</form>

	<?php 
		if (isset($_GET['cuotaInicial'])) {
			echo "valor cuota inicial: ", $_GET['cuotaInicial'], " valor cuotas: ", $_GET['valorCuotas'];
			
		}

	 ?>

</body>
</html>