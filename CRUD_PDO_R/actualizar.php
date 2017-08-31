<?php 
	$codigo = $_POST['codigo'];
	$marca = $_POST['marca'];
	$tipoVehiculo = $_POST['tipoVehiculo'];

	try {
	$db = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
	$filas = $db->query("update carros set marca = '$marca', tipos_vehiculo_id = $tipoVehiculo where codigo = $codigo")->fetchAll(PDO::FETCH_OBJ);

	} catch (PDOException $e) {
		echo $e;
	}
	
	header("location:index.php")

 ?>