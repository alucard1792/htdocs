<?php 
	/**
	* 
	*/
	abstract class Usuario
	{
		
		protected $nombre = "";
		protected $apellido = "";
		protected $cedula = 0;
		protected $isCasado = false;
		protected $isCSF = false;
		protected $anoIngreso = 0;

		
		function __construct($nombre, $apellido, $cedula, $isCasado, $isCSF, $anoIngreso)
		{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->cedula = $cedula;
			$this->isCasado = $isCasado;
			$this->isCSF = $isCSF;
			$this->anoIngreso = $anoIngreso;

		}

		public function setValor($campo, $valor ){
			$this -> campo= $valor;

		}

		public function getValor($campo){
			return $this -> valor;

		}

	}
	
 ?>