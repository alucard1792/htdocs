<?php 
	/**
	* 
	*/
	class Vendedor
	{

		private $SALARIOSEMANAL = 200;
		private $comision = 0;
		private $ventasBrutas = 0;
		private $tempSalida = "";
		private $cantidadArticulosVendidos = array();
		private $precioArticulosVendidos = array();
		private $tamano = 0;

		public function setValor($campo, $valor ){
			$this -> $campo= $valor;

		}

		public function getValor($campo){
			return $this -> $campo;

		}

		public function setCantidadArticulosVendidos($cantidadProducto){
			array_push($this->cantidadArticulosVendidos, $cantidadProducto);

		}

		public function setPrecioArticulosVendidos($valorProducto){
			array_push($this->precioArticulosVendidos, $valorProducto);

		}

		public function getArticulosVendidos(){
			$this->tamano = count($this->cantidadArticulosVendidos);
			$this->tempSalida .= "cantidad articulos: ";

			for ($x = 0; $x < $this->tamano; $x++) {
				$this->tempSalida .= (string)$this->cantidadArticulosVendidos[$x] . "&#9;";

			}

			$this->tempSalida .= "<br>";
			$this->tempSalida .= "&nbsp;&nbsp&nbsp;&nbsp;precio articulos: ";

			for ($y = 0; $y < $this->tamano; $y++) {
				$this->tempSalida .= (string)$this->precioArticulosVendidos[$y] . "&#9;";

			} 

			$this->tamano = count($this->precioArticulosVendidos);
			for ($i=0; $i < $this->tamano; $i++) { 
				$this->comision += $this->precioArticulosVendidos[$i]  * $this->cantidadArticulosVendidos[$i];

			}
			

			return ($this->tempSalida .= ": total a pagar al empleado: ". ($this->SALARIOSEMANAL + ($this->comision / (100 * 0.09 ))));

		}

		public function obtenerPagoEmpleado(){
			$this->tamano = count($this->precioArticulosVendidos);
			for ($i=0; $i < $this->tamano; $i++) { 
				$this->comision += $this->precioArticulosVendidos[$i];

			}

			return $this->comision;
		}

	}

 ?>