<?php 
	$marca = $_POST['marca'];
	$tipoVehiculo = $_POST['tipoVehiculo'];

	try {
	$db = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
	$filas = $db->query("insert into carros values(null, '$marca',$tipoVehiculo)")->fetchAll(PDO::FETCH_OBJ);

	} catch (PDOException $e) {
		echo $e;
		
	}
	

 ?>