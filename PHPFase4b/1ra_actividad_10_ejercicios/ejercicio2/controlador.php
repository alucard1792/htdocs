<?php 
	$salario = $_POST['salario'];
	$valorInmueble = $_POST['valorInmueble'];
	$cuotaInicial = 0;
	$valorCuotas = 0;

	if ($salario < 800000) {
		$cuotaInicial = ((15/100) * $valorInmueble);
		$valorCuotas = ($valorInmueble - $cuotaInicial) / 120;

	}elseif ($salario >= 800000) {
		$cuotaInicial = ((30/100) * $valorInmueble);
		$valorCuotas = ($valorInmueble - $cuotaInicial) / 120;

	}
	
	header("location:index.php?cuotaInicial=".$cuotaInicial."&valorCuotas=".$valorCuotas);
?>