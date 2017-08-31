<!DOCTYPE html>
<html>
	<head>
		<title>ejercicio 5</title>
	</head>
	<body>

		<form method="post" action="controlador.php">

			<label for="tipoJubilacion">Seleccione su tipo de jubilacion: </label>
			<select id="tipoJubilacion" name="tipoJubilacion">
				<option value="1">jubilacion por edad</option>
				<option value="2">jubilacion por antiguedad joven</option>
				<option value="3">jubilacion por antiguedad adulta</option>
			</select>

			<label for="edad">ingrese su edad: </label>
			<input type="number" name="edad" id="edad">

			<label for="tiempoLaboral">ingrese su antiguedad laboral: </label>
			<input type="number" name="tiempoLaboral" id="tiempoLaboral">

			<button type="submit">enviar</button>

		</form>

		<?php 
			if (isset($_GET['salida'])) {
				echo "resultado = ", $_GET['salida'];
				$_GET['salida'] = "";
			}

		 ?>

	</body>
</html>