<?php 
   /**
	* 
	*/
	class Contacto{
		

	private $nombre;
	private $telefono;

	public function __construct($nombre, $telefono){
		setTelefono($telefono);
		setNombre($nombre);

	}
	
	public function setTelefono($telefono){
		$this->telefono = $telefono;

	}

	public function getTelefono($telefono){
		return $this->telefono;

	}

	public function setNombre($telefono){
		$this->nombre = $nombre;

	}

	public function getNombre($nombre){
		return $this->nombre;

	}

	}

 ?>