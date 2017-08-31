<?php 
	$edad = $_POST['edad'];
	$tiempoLaboral = $_POST['tiempoLaboral'];
	$tipoJubilacion = $_POST['tipoJubilacion'];
	$salida = "";

	print $edad;
	print $tiempoLaboral;
	print $tipoJubilacion;

	if ($edad >= 60 && $tiempoLaboral < 25 && $tipoJubilacion == 1) {
		$salida = "resultado = se jubila por edad";
		
	}elseif ($edad >= 60 && $tiempoLaboral >= 25 && $tipoJubilacion == 1) {
		$salida = "resultado = no aplica jubilacion por edad";
		
	}elseif ($edad >= 60 && $tiempoLaboral >= 25 && $tipoJubilacion == 2) {
		$salida = "resultado = se jubila por antiguedad joven";

	}elseif ($edad >= 60 && $tiempoLaboral >= 25 && $tipoJubilacion == 3) {
		$salida = "resultado = se jubila por antiguedad adulta";

	}else{
		$salida = "resultado = siga rompiendose la espalda";

	}


	header("location:index.php?salida=".$salida);
	
		/*header("location:index.php?equipoComputo=".$equipoComputo."&mobiliario=".$mobiliario."&insumos=".$insumos."&insentivoPersonal=".$insentivoPersonal."&prestamo=".$prestamo."&nuevoSaldo=".$nuevoSaldo);*/

 ?>