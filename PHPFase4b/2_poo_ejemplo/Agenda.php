<?php 
	require_once 'contacto.php';

	/**
	* 
	*/
	class Agenda{

		private $contactos = array();
		

		public function addContacto(Contacto $contacto){
			$this->contactos[]= $contacto;


		}
	
	}


 ?>