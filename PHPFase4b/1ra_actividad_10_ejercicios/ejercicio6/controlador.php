<?php 
	$saldoAnterior = $_POST['ingresoDinero'];
	$equipoComputo = 0.0;
	$mobiliario = 0.0;
	$insumos = 0.0;
	$insentivoPersonal = 0.0;
	$prestamo = 0.0;
	$nuevoSaldo = 0.0;
	$salida = "";

	if ($saldoAnterior < 1 ) {

		echo "saldoAnterior: ", $saldoAnterior, " nuevoSaldo: ", $nuevoSaldo, " prestamo: ", $prestamo, " equipoComputo: ", $equipoComputo, " mobiliario: ", $mobiliario, " insumos: ", $insumos, " insentivoPersonal: ", $insentivoPersonal;
		print "<br>";
		$nuevoSaldo = 10000;
		$prestamo = $saldoAnterior * (-1) + 10000;
		$saldoAnterior += $prestamo;
		$equipoComputo = 5000;
		$nuevoSaldo -= 5000;
		$mobiliario = 2000;
		$nuevoSaldo -= 2000;
		$insumos = ($nuevoSaldo / 2);
		$nuevoSaldo /= 2;
		$insentivoPersonal = $nuevoSaldo;
		$nuevoSaldo = 0;
		echo "saldoAnterior: ", $saldoAnterior, " nuevoSaldo: ", $nuevoSaldo, " prestamo: ", $prestamo, " equipoComputo: ", $equipoComputo, " mobiliario: ", $mobiliario, " insumos: ", $insumos, " insentivoPersonal: ", $insentivoPersonal;

	}elseif ($saldoAnterior > 0 && $saldoAnterior < 20000) {

		echo "saldoAnterior: ", $saldoAnterior, " nuevoSaldo: ", $nuevoSaldo, " prestamo: ", $prestamo, " equipoComputo: ", $equipoComputo, " mobiliario: ", $mobiliario, " insumos: ", $insumos, " insentivoPersonal: ", $insentivoPersonal;
		print "<br>";
		$nuevoSaldo = 20000;
		$prestamo = ($saldoAnterior - 20000) * (-1);
		$equipoComputo = 5000;
		$nuevoSaldo -= 5000;
		$mobiliario = 2000;
		$nuevoSaldo -= 2000;
		$insumos = ($nuevoSaldo / 2);
		$nuevoSaldo /= 2;
		$insentivoPersonal = $nuevoSaldo;
		$nuevoSaldo = 0;
		echo "saldoAnterior: ", $saldoAnterior, " nuevoSaldo: ", $nuevoSaldo, " prestamo: ", $prestamo, " equipoComputo: ", $equipoComputo, " mobiliario: ", $mobiliario, " insumos: ", $insumos, " insentivoPersonal: ", $insentivoPersonal;

		
	}elseif ($saldoAnterior >= 20000) {

		echo "saldoAnterior: ", $saldoAnterior, " nuevoSaldo: ", $nuevoSaldo, " prestamo: ", $prestamo, " equipoComputo: ", $equipoComputo, " mobiliario: ", $mobiliario, " insumos: ", $insumos, " insentivoPersonal: ", $insentivoPersonal;
		print "<br>";
		$nuevoSaldo = $saldoAnterior;
		$equipoComputo = 5000;
		$nuevoSaldo -= 5000;
		$mobiliario = 2000;
		$nuevoSaldo -= 2000;
		$insumos = ($nuevoSaldo / 2);
		$nuevoSaldo /= 2;
		$insentivoPersonal = $nuevoSaldo;
		$nuevoSaldo = 0;
		$salida = "saldoAnterior: "+ $saldoAnterior+ " nuevoSaldo: "+ $nuevoSaldo+ " prestamo: "+ $prestamo+ " equipoComputo: "+ $equipoComputo+ " mobiliario: "+ $mobiliario+ " insumos: "+ $insumos+ " insentivoPersonal: "+$insentivoPersonal;

	}

	header("location:index.php?equipoComputo=".$equipoComputo."&mobiliario=".$mobiliario."&insumos=".$insumos."&insentivoPersonal=".$insentivoPersonal."&prestamo=".$prestamo."&nuevoSaldo=".$nuevoSaldo);

 ?>