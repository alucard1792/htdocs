<?php 
	try {
	$db = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
	
	} catch (PDOException $e) {
		echo $e;
	}

	$codigo = $_GET['codigo'];

	if($db->query("delete from carros where codigo = $codigo")){
		header("location:index.php");
	}else{
		echo "error";

	}


 ?>