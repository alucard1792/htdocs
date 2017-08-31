<?php 
	/**
	* 
	*/
	require_once 'Empleado.php';
	public class EmpleadoBaseMasComision extends Empleado
	{

		private $venta;
		private $comision;

		function __construct($venta, $comision, $cedula, $nombre, $apellido, $salarioBase)
		{
			$this -> comision = $comision;
			$this -> venta = $venta;
			parent::$this->setValor("cedula", $cedula);
			parent::$this->setValor("nombre", $nombre);
			parent::$this->setValor("apellido", $apellido);
			parent::$this->setValor("salarioBase", $salarioBase);
		}

		public function setValor($campo, $valor ){
			$this -> campo= $valor;

		}

		public function getValor($campo){
			return $this -> valor;

		}

		public function calcularSalario(){
			return $this ->getValor("salarioBase") + $this ->getValor("venta") * $this->getValor("comision"); 

		}
		
	}

 ?>