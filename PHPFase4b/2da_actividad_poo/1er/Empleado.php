<?php 
	abstract class Empleado
	{
		
		protected $cedula;
		protected $nombre;
		protected $apellido;
		protected $salarioBase;

		public function __construct($cedula, $nombre, $apellido, $salarioBase){
			$this->cedula = $cedula;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->salarioBase = $salarioBase;

		}

		abstract function calcularSalario();

		public function setValor($campo, $valor ){
			$this -> campo= $valor;

		}

		public function getValor($campo){
			return $this -> valor;

		}

	}


 ?>