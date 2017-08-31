<?php 
	require '../conexion.php';

	$id = $_GET['id'];



	try {
	
		if($con->query("delete from vendedor where id = $id")){
			echo "<br>bien";
		}else{
		echo "<br>mal";

		}

	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	
	//header("location:../index.php")

 ?>