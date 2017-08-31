<?php 
	/**
	* 
	*/
	require_once 'Usuario.php';
	final class PersonalAdministrativo extends Usuario
	{

		private $coordinacionConcreta = "";
		private $bandera = false;
		
		function __construct($nombre, $apellido, $cedula, $isCasado, $isCSF, $anoIngreso, $coordinacionConcreta)
		{

			$this->coordinacionConcreta = $coordinacionConcreta;
			$this->bandera = true;
			//setValor(coordinacionConcreta, $coordinacionConcreta);
			//setValor(bandera, true);
			parent::__construct($nombre, $apellido, $cedula, $isCasado, $isCSF, $anoIngreso);

		}

		public function setValor($campo, $valor ){
			$this -> campo= $valor;

		}

		public function getValor($campo){
			return $this -> valor;

		}

		public function __toString(){
			return "nombre: ". $this->nombre.
			" apellido: ". $this->apellido.
			" cedula: ". $this->cedula.
			" isCasado: ". ($this->isCasado ? "si":"no").
			" isCSF: ". ($this->isCSF ? "si":"no").
			" anoIngreso: ". $this->anoIngreso.
			" coordinacionConcreta: ". $this->coordinacionConcreta. "\n";
	
		}

	}

 ?>