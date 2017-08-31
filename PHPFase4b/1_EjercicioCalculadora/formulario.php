<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="POST" action="controlador.php">
		<label for="num1">numero 1: </label>
		<input type="text" name="num1" id="num1">
		<label for="num2">numero 2: </label>
		<input type="text" name="num2" id="num2">
		<button type="submit">sumar</button>
	</form>
	<?php 
		if ($_GET['res'] != null) {
			echo "el resultado es: ", $_GET['res'];
		}
	 ?>
</body>
</html>