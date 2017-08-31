<?php 
/**
* 
*/
class Fichadao
{
	
	public function crearFicha(Fichadao $fichadao, FichaAprendizdao $fichaAprendizdao){
			$cnn = conexion::getConexion();
			$mensaje = "";
			try {
				$query = $cnn->prepare("INSERT INTO ficha values()");
				$query->bindParam(':nombre', $nombre, PDO::PARAM_STR);
				$query->bindParam(':password', $password, PDO::PARAM_STR);
				$query->execute();
				$total = $query->rowCount();

			} catch (Exception $ex) {
				$mensaje = $ex->getMessage();

			}

		}
	
}

?>