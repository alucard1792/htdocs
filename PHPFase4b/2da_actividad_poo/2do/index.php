<?php 
	require_once 'CentralTelefonica.php';

	$centralTelefonica = new CentralTelefonica();
	$centralTelefonica->setFranjaHoraria(2);
	$centralTelefonica->llamar(123456, 123556712, 5);
	$centralTelefonica->llamar(123456, 123556712, 5);


 ?>