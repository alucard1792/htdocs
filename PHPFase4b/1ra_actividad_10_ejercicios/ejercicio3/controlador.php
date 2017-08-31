<?php 
	
	$numeroHectareas = $_POST['numeroHectareas'];
	$pinos = 0;
	$numeroPinos = 0;
	$oyamel = 0;
	$numeroOyamel = 0;
	$cedro = 0;
	$numeroCedro = 0;

	if ($numeroHectareas > 1000000) {
		$pinos = $numeroHectareas * 0.70;
		$numeroPinos = $pinos/10*8;
		$oyamel = $numeroHectareas * 0.20;
		$numeroOyamel = $oyamel/15*15;
		$cedro = $numeroHectareas * 0.10;
		$numeroCedro = $cedro/18*10;

		
	}elseif ($numeroHectareas <= 1000000) {
		$pinos = $numeroHectareas * 0.50;
		$numeroPinos = $pinos/10*8;
		$oyamel = $numeroHectareas * 0.30;
		$numeroOyamel = $oyamel/15*15;
		$cedro = $numeroHectareas * 0.20;
		$numeroCedro = $cedro/18*10;
		
	}elseif ($numeroHectareas <= 0) {
		

	}

	header("location:index.php?pinos=".$pinos."&oyamel=".$oyamel."&cedro=".$cedro."&numeroPinos=".$numeroPinos."&numeroOyamel=".$numeroOyamel."&numeroCedro=".$numeroCedro);

 ?>