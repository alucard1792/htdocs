<!DOCTYPE html>
<html>
<head>
	<title>ejemplo</title>
	<meta charset="utf-8">
	<?php 
		$con = mysqli_connect("localhost", "root", "", "crud_php") or die("error en la coneccion");

	 ?>
</head>
<body>

	<form action="formulario.php" method="POST">

		<label>usuario</label>
		<input type="text" name="usuario" placeholder="ingrese nombre usuario">
		<br>
		<label>password</label>
		<input type="text" name="password" placeholder="ingrese contraseña">
		<br>
		<label>email</label>
		<input type="text" name="email" placeholder="ingrese email">
		<br>
		<input type="submit" name="botonEnviar" value="insertar datos">

	</form>

	<?php 
		if(isset($_POST['botonEnviar'])){
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			$insertar = "INSERT INTO usuarios VALUES (null, '$usuario', '$password', '$email')";
			echo $insertar;
			$ejecutar = mysqli_query($con, $insertar);

			if ($ejecutar) {
				print("los datos se insertaron correctamente");

			}else{
				print("los datos no se insertaron correctamente");


			}

		}

	 ?>

	 <table width="500" border="1" style="background-color: #f9f9f9">
	 	<tr>
	 		<th>id</th>
	 		<th>usuario</th>
	 		<th>contraseña</th>
	 		<th>email</th>
	 		<th>editar</th>
	 		<th>borrar</th>
	 	</tr>
	 	<?php 
	 		$consulta = "SELECT * FROM usuarios";
	 		$ejecutar = mysqli_query($con, $consulta);

	 		while ($fila = mysqli_fetch_array($ejecutar)) {
	 			$id = $fila['id'];
	 			$usuario = $fila['usuario'];
	 			$password = $fila['password'];
	 			$email = $fila['email'];

	 	 ?>

	 	 <tr align="center">
	 	 	<td><?php echo $id; ?></td>
	 	 	<td><?php echo $usuario; ?></td>
	 	 	<td><?php echo $password; ?></td>
	 	 	<td><?php echo $email; ?></td>
	 	 	<td><a href="formulario.php?editar=<?php echo $id; ?>">editar</a></td>
	 	 	<td><a href="formulario.php?borrar=<?php echo $id; ?>">borrar</a></td>
	 	 </tr>
	 	 <?php 
	 	 	}
	 	  ?>
	 </table>

	 <?php 
	 	if (isset($_GET['editar'])) {
	 		include('editar.php');

	 	}

	  ?>


	 <?php 
	 	if (isset($_GET['borrar'])) {
			$borrarId = $_GET['borrar'];	 		
			$borrar = "delete from usuarios where id = '$borrarId'";
			$ejecutar = mysqli_query($con, $borrar);
			if($ejecutar){
	 		echo "se borro";
	 	}else{
	 		echo "no se borro";


	 	}

	 	}

	  ?>



</body>
</html>