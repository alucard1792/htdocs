<?php 
	/**
	* 
	*/
	class Programadao
	{
		public function listarProgramas(){
			$cnn = conexion::getConexion();
			$filas = $cnn->query("select * from programa")->fetchAll(PDO::FETCH_OBJ);
			return $filas;

		}

	}

 ?>