<!DOCTYPE html>
<html>
<head>
	<title>promedio</title>
	</head>
<body>

	<form method="post" action="controlador.php">
		
		<label for="materia1">Nota materia 1: </label>
		<input type="text" name="materia1" id="materia1">

		<label for="materia2">Nota materia 2: </label>
		<input type="text" name="materia2" id="materia2">	

		<label for="materia3">Nota materia 3: </label>
		<input type="text" name="materia3" id="materia3">

		<label for="materia4">Nota materia 4: </label>
		<input type="text" name="materia4" id="materia4">	

		<label for="materia5">Nota materia 5: </label>
		<input type="text" name="materia5" id="materia5">
		
		<select name="tipoPersona">
			<option>estudiante</option>
			<option>profesional</option>
		</select>

		<button type="submit">calcular</button>

	</form>

	<?php 
		if (isset($_GET['salida'])) {
			if($_GET['salida'] == "Estudiante, es muy pronto para la universidad...."){
				print $_GET['salida'];

			}else{
				print $_GET['salida'];
				echo "valor a pagar: ", $_GET['total'];

			}

		}

	 ?>

</body>

</html>