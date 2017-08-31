<?php 
	/**
	* 
	*/
	abstract class Inmueble
	{

		protected $direccion = "";
		protected $metrosCuadrados = 0;
		protected $isNuevo = false;
		protected $precioBase = 0;
		protected $anosAntiguedad = 0;
		protected $PrecioTotal = 0;
		
		function __construct($direccion, $metrosCuadrados , $isNuevo, $precioBase, $anosAntiguedad)
		{
			$this->direccion = $direccion;
			$this->metrosCuadrados = $metrosCuadrados;
			$this->isNuevo = $isNuevo;
			$this->precioBase = $precioBase;
			$this->anosAntiguedad = $anosAntiguedad;

		}

		public function setValor($campo, $valor ){
			$this -> $campo = $valor;

		}

		public function getValor($campo){
			return $this -> $campo;

		}

		abstract function calcularPrecio();

		public function calcularPrecioPorAntiguedad(){
			if ($this->anosAntiguedad <= 15) {
				$this->setValor("PrecioTotal", $this->getValor("precioBase") - (100 * 0.01));
				
			}else{
				$this->PrecioTotal = $this->precioBase - (100 * 0.02);

			}

		}

		public function isMayorCincuentaMetrosCuadrados(){
			if ($this->metrosCuadrados >= 50) {
				$this->PrecioTotal = $this->precioBase + (100 * 0.01);

			}

		}

		public function __toString(){
			return "tipo de inmueble = ". get_class($this).
			": direccion = ". $this->direccion.
			": metrosCuadrados = ". $this->metrosCuadrados.
			": isNuevo = ". ($this->isNuevo ?"si":"no").
			": precioBase = ". $this->precioBase.
			": anosAntiguedad = ". $this->anosAntiguedad.
			": PrecioTotal = ". $this->PrecioTotal;

		}

	}

 ?>