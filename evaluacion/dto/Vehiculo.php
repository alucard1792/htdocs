<?php 
	
	class Vehiculo
	{
		private $id;
		private $color;
		private $estado;
		private $precio;

		function __construct($id, $color, $estado, $precio){
			$this->id = $id;
			$this->color = $color;
			$this->estado = $estado;
			$this->precio = $precio;

		}

		function getId(){
			return $this->id;
			
		}

		function getColor(){
			return $this->color;
			
		}

		function getEstado(){
			return $this->estado;

		}		

		function getPrecio(){
			return $this->precio;

		}


		function setId($id){
			$this->id = $id;
			
		}

		function setColor($color){
			$this->color = $color;
			
		}

		function setEstado($estado){
			$this->estado = $estado;

		}		

		function setPrecio($precio){
			$this->precio = $precio;

		}

	}

 ?>