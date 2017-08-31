<?php 

	$nota1 = $_POST[materia1];
	$nota2 = $_POST[materia2];
	$nota3 = $_POST[materia3];
	$nota4 = $_POST[materia4];
	$nota5 = $_POST[materia5];
	$tipoPersona = $_POST[tipoPersona];
	$promedio = round(($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5, 2);
	$salida = "";
	$materiasReprobadas = 0;
	$total = 0;
	$descuento = 0;


	if ($nota1 < 3) {
			$materiasReprobadas++;
			
	}if ($nota2 < 3) {
			$materiasReprobadas++;

	}if ($nota3 < 3) {
			$materiasReprobadas++;

	}if ($nota4 < 3) {
			$materiasReprobadas++;

	}if ($nota5 < 3) {
			$materiasReprobadas++;

	}

	if($tipoPersona == "estudiante"){

		if ($promedio > 9) {
			$salida = "Estudiante, puede cursar 55 unidades y se le hará un 25% de descuento";
			$descuento = 25/100*(180*11);
			$total = (180*10) - $descuento;

		}if ($promedio >= 9 || $promedio < 9.5) {
			$salida = "Estudiante, puede cursar 50 unidades y se le hará un 10% de descuento";
			$descuento = 10/100*(180*10);
			$total = (180*10) - $descuento;

		}if ($promedio >= 7 || $promedio < 9) {
			$salida = "Estudiante, puede cursar cursar 50 unidades y no tiene descuento";
			$total = (180*10);

		}if ($promedio < 7 && $materiasReprobadas <= 3) {
			$salida = "Estudiante, puede cursar cursar 45 unidades y no tiene descuento.";
			$total = (180*9);

		}if ($promedio < 7 && $materiasReprobadas >= 4) {
			$salida = "Estudiante, puede cursar cursar 40 unidades y no tiene descuento.";
			$total = (180*8);

		}if ($promedio < 3 && $materiasReprobadas >= 0) {
			$salida = "Estudiante, es muy pronto para la universidad....";

		}
		
	}elseif ($tipoPersona == "profesional") {

		if ($promedio >= 9.5) {
			$salida = "Profesional, puede cursar 55 unidades y se le hará un 20% de descuento";
			$descuento = 20/100*(300*11);
			$total = (300*11) - $descuento;

		}if ($promedio < 9.5) {
			$salida = "Profesional, puede cursar 55 unidades y no tiene descuento";
			$total = (300*8);

		}
		
	}

	header("location:index.php?salida=".$salida."&total=".$total."&promedio=".$promedio);

 ?>