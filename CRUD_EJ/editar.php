<?php 

	if (isset($_GET['editar'])) {
		$editar_id = $_GET['editar'];

		$consulta = "select * from usuarios where id = $editar_id";
		$ejecutar = mysqli_query($con, $consulta);

		$fila = mysqli_fetch_array($ejecutar);

		$usuario = $fila['usuario'];
		$password = $fila['password'];
		$email = $fila['email'];
		echo $fila[0];

	}

 ?>

 <br>

 <form method="POST" action="">
 	<input type="text" name="usuario" value="<?php echo $usuario; ?>"><br>
 	<input type="text" name="password" value="<?php echo $password; ?>"><br>
 	<input type="text" name="email" value="<?php echo $email; ?>"><br>
 	<input type="submit" name="botonActualizar" value="actializar datos"><br>
 </form>

 <?php 
	 if (isset($_POST['botonActualizar'])) {
	 	$actualizarNombre = $_POST['usuario'];
	 	$actualizarPassword = $_POST['password'];
	 	$actualizarEmail = $_POST['email'];

	 	$actualizar = "update usuarios set usuario = '$actualizarNombre', password = '$actualizarPassword', email = '$actualizarEmail' where id = '$editar_id'";
	 	$ejecutar = mysqli_query($con, $actualizar);
	 	if ($ejecutar) {
	 		echo "se actualizo";
	 	}else{
	 		echo "no se actualizo";


	 	}
	 }

  ?>