<?php 
	$valor = $_POST[valor];
	$cantidad = $_POST[ValorCantidad];

	$total = $valor * $cantidad;
	$dineroPropio = 0;
	$dineroBanco = 0;
	$dineroFabricante = 0;
	$interes = 0;

	if($total > 500000){
		$dineroPropio = $total * 55/100;
		$dineroBanco = $total/100 * 0.3;
		$dineroFabricante = $total * 15/100;

	}else{
		$dineroPropio = $total * 70/100;
		$dineroFabricante = $total * 30/100;

	}

	$interes = $dineroFabricante * 20/100;
	header("location:index.php?propio=".$dineroPropio."&banco=".$dineroBanco."&fabricante=".$dineroFabricante."&interes=".$interes);

 ?>