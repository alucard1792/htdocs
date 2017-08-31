<?php 
/**
 * 
 */
 class FichaAprendizdao
 {
 	
	public function crearFichaAprendiz(){
		$cnn = conexion::getConexion();
		$filas = $cnn->query("select * from programa")->fetchAll(PDO::FETCH_OBJ);
		return $filas;

	}
	
 }

?>