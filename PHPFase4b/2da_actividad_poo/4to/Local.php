<?php 
	/**
	* 
	*/
	require_once 'Inmueble.php';
	final class Local extends Inmueble
	{

		private $numeroVentanas = 0;
		
		function __construct($direccion, $metrosCuadrados , $isNuevo, $precioBase, $anosAntiguedad, $numeroVentanas){
			$this->numeroVentanas = $numeroVentanas;
			parent::__construct($direccion, $metrosCuadrados , $isNuevo, $precioBase, $anosAntiguedad);

		}

		public function setValor($campo, $valor ){
			$this -> $campo= $valor;

		}

		public function getValor($campo){
			return $this -> $campo;

		}

		public function calcularPrecio(){
			parent::calcularPrecioPorAntiguedad();
			parent::isMayorCincuentaMetrosCuadrados();
			$this->calcularPrecioPorNumeroVentanas();
		}

		public function calcularPrecioPorNumeroVentanas(){
			if ($this->numeroVentanas <= 1) {
				$this->PrecioTotal = $this->precioBase - (100 * 0.02);

			}else{
				$this->PrecioTotal = $this->precioBase + (100 * 0.02);

			}

		}

		public function __toString(){
			return parent::__toString().
			": numeroVentanas = ". $this->numeroVentanas. "<br>";
			
		}

	}

 ?>