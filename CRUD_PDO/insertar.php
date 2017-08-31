<?php 
	require_once("Clase.php");

	$db = new Producto("mysql:dbname=tienda_pdo;host=localhost", "root", "");
	$db->conexion();

	$columna = "nombre, precio, marca";
	$campos = array($_POST);
	//echo "<pre>";print_r($campos);echo "</pre>";

	$producto = $db->alta($columna, "productos", $campos);

	header("location: formulario.php?msj=". $producto);

 ?>