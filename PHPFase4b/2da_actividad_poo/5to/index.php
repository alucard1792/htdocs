<?php 
	require_once 'Vendedor.php';

	$vendedor1 = new Vendedor();

	$vendedor1->setCantidadArticulosVendidos(3);
	$vendedor1->setPrecioArticulosVendidos(500);

	$vendedor1->setCantidadArticulosVendidos(2);
	$vendedor1->setPrecioArticulosVendidos(750);

	$vendedor1->setCantidadArticulosVendidos(5);
	$vendedor1->setPrecioArticulosVendidos(125);

	$vendedor1->setCantidadArticulosVendidos(6);
	$vendedor1->setPrecioArticulosVendidos(50);

	$vendedor1->setCantidadArticulosVendidos(1);
	$vendedor1->setPrecioArticulosVendidos(2000);

	print_r( $vendedor1->getArticulosVendidos());

 ?>