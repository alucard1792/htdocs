<!DOCTYPE html>
<html>
<head>
	<title>alta de propducto</title>
</head>
<body>
	<?php 
		if (isset($_GET["msj"])) {
			echo $_GET["msj"];
		}

	 ?>

	<form action="insertar.php" method="post">
		nombre: <input type="text" name="nombre"><br>
		marca: <input type="text" name="marca"><br>
		precio: <input type="text" name="precio"><br>
		<input type="submit" value="guardar"><br>
	</form>

</body>
</html>