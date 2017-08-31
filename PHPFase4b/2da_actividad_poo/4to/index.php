<?php 
	require_once 'Apartamento.php';
	require_once 'Local.php';

	$apartamento1 = new Apartamento("calle falsa 123", 50 , true, 100, 15, 10);
	$local1 = new Local("calle falsa 124", 50 , true, 100, 15, 3); 
	$apartamento1->calcularPrecio();
	$local1->calcularPrecio();
	echo $apartamento1;
	echo $local1;

 ?>