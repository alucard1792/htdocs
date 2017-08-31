<?php 
	/**
	* 
	*/
	require_once 'Usuario.php';
	final class Aprendiz extends Usuario
	{

		private $ficha = 0;

		
		function __construct($nombre, $apellido, $cedula, $isCasado, $isCSF, $anoIngreso, $ficha)
		{
			$this->ficha = $ficha;
			//setValor(ficha, $ficha);
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
			" ficha: ". $this->ficha. "\n";
	
		}

	}

 ?>