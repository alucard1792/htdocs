<?php 
	/**
	* 
	*/
	require_once 'Usuario.php';
	final class Instructor extends Usuario
	{

		private $programaFormacion = "";
		private $bandera = false;
		
		function __construct($nombre, $apellido, $cedula, $isCasado, $isCSF, $anoIngreso, $programaFormacion)
		{
			$this->programaFormacion = $programaFormacion;
			$this->bandera = true;
			//setValor(programaFormacion, $programaFormacion);
			//setValor(bandera, true);
			parent::__construct($nombre, $apellido, $cedula, $isCasado, $isCSF, $anoIngreso);

		}

		public function setValor($campo, $valor ){
			$this -> campo = $valor;

		}

		public function getValor($campo){
			return $this -> valor;

		}

		public function __toString(){
			return "nombre: ". $this->nombre.
			" apellido: ". $this->apellido.
			" cedula: ". $this->cedula.
			" isCasado: ". ($this->isCasado ? "si":"no").
			" isCSF: ". ($this->isCSF ? "si". " anoIngreso: ". $this->anoIngreso.
			" programaFormacion: ". $this->programaFormacion. "\n":"no");
	
		}

	}
 ?>