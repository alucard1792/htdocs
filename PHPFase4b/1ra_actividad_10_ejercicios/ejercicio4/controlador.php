<?php 
	
	$numeroHectareas = $_POST['numeroHectareas'];
	$pinos = 0;
	$numeroPinos = 0;
	$oyamel = 0;
	$numeroOyamel = 0;
	$cedro = 0;
	$numeroCedro = 0;

	if ($numeroHectareas > 1000000) {
		$pinos = 70;
		$oyamel = 20;
		$cedro = 10;
		

		
	}elseif ($numeroHectareas <= 1000000) {
		$pinos = 50;
		$oyamel = 30;
		$cedro = 20;
		
	}elseif ($numeroHectareas <= 0) {
		

	}

	header("location:index.php?pinos=".$pinos."&oyamel=".$oyamel."&cedro=".$cedro);

 ?>