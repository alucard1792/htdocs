<!DOCTYPE html>
<html>
	<head>
		<title>ejercicio6</title>
	</head>
	<body>

		<form method="post" action="controlador.php">

			<label for="ingresoDinero">ingrese su capital: </label>
			<input type="number" name="ingresoDinero" id="ingresoDinero"/>

			<button type="submit">enviar</button>

		</form>

		<?php 
			if (isset($_GET['insumos'])) {
				echo "resultado: ", " equipoComputo = ", $_GET['equipoComputo'], " mobiliario = ", $_GET['mobiliario'], " insumos = ", $_GET['insumos']," insentivoPersonal = ", $_GET['insentivoPersonal'], " prestamo = ", $_GET['prestamo']," nuevoSaldo = ", $_GET['nuevoSaldo'];
			}

		 ?>

	</body>
</html>