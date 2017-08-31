<?php 
	require '../conexion.php';

	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$id = $_POST['id'];



	try {
	
		$query = $con->prepare("update vendedor set nombre = ?, telefono = ? where id = ?");
		$query->bindParam(1, $nombre);
		$query->bindParam(2, $telefono);
		$query->bindParam(3, $id);
		$query->execute();

	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	
	header("location:../index.php")


 ?>