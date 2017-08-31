<?php 
	/**
	* 
	*/
	class Categoria
	{
		private $id;
		private $nombreCategoria;

		function __construct($id, $nombreCategoria){
			$this->id = $id;
			$this->nombreCategoria = $nombreCategoria;
			
		}

		function getId(){
			return $this->id;
			
		}

		function getNombreCategoria(){
			return $this->nombreCategoria;
			
		}

		function setId($id){
			$this->id = $id;
			
		}
		function setNombreCategoria($nombreCategoria){
			$this->nombreCategoria = $nombreCategoria;
			
		}

	}

 ?>