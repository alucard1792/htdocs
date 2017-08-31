<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 1</title>
</head>
<body>

	<form method="post" action="ControladorPieza.php">

		<label for="campo1">valor pieza: </label>
		<input type="text" name="valor">

		<label for="campo2">valor cantidad: </label>
		<input type="text" name="ValorCantidad">

		<button type="submit">enviar</button>

	</form>

	<?php
	
		if (isset($_GET['propio'])) {
			echo "dinero propio".$_GET['propio'];
			echo "dinero banco".$_GET['banco'];
			echo "dinero fabricante".$_GET['fabricante'];
			echo "interes".$_GET['interes'];

		}

	 ?>


</body>
</html>