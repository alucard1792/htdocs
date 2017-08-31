<?php 
	/**
	* 
	*/
	class Aprendizdao
	{
		
		public function listarAprendiz(){
			$cnn = conexion::getConexion();
			$filas = $cnn->query("select * from aprendiz")->fetchAll(PDO::FETCH_OBJ);
			return $filas;

		}

	}
	
 ?>