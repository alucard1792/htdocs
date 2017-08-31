<?php 
	/**
	* 
	*/
	require_once 'Empleado.php';
	class EmpleadoPorComision extends Empleado
	{

		private $venta;
		private $comision;

		public function __construct($venta, $comision, $cedula, $nombre, $apellido, $salarioBase){
			$this -> comision = $comision;
			$this -> venta = $venta;
			parent::__construct($cedula, $nombre, $apellido, $salarioBase);

		}

		public function setValor($campo, $valor ){
			$this -> campo= $valor;

		}

		public function getValor($campo){
			return $this -> $campo;

		}

		public function calcularSalario(){
			return $this ->getValor("venta") * $this->getValor("comision"); 

		}

	}	

 ?>