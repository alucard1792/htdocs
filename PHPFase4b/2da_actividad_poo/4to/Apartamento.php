<?php 
	/**
	* 
	*/
	require_once 'Inmueble.php';
	final class Apartamento extends Inmueble
	{

		private $numeroPiso = 0;
		
		function __construct($direccion, $metrosCuadrados , $isNuevo, $precioBase, $anosAntiguedad, $numeroPiso){

			$this->numeroPiso = $numeroPiso;
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
			$this->isMayorTercerPiso();
			
		}


		public function isMayorTercerPiso(){
			if ($this->numeroPiso >= 3) {
				$this->PrecioTotal = $this->precioBase + (100 * 0.03);
				
			}
			
		}

		public function __toString(){
			return parent::__toString().
			": numeroPiso = ". $this->numeroPiso. "<br>";
			
		}

	}

 ?>