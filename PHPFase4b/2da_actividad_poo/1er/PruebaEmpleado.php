<?php 
require_once 'EmpleadoPorComision.php';
	$empleado = new EmpleadoPorComision(100000, 0.15, "123456", "ass", "apellido", 750);

	echo $empleado->calcularSalario();

 ?>