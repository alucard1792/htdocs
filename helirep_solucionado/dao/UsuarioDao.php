<?php

class UsuarioDao {
	public function registrarUsuario(UsuarioDto $usuarioDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("INSERT INTO tbl_usuario VALUES ? ? ? ? ? ? ? ?");
			$query->bindParam(1, null);
			$query->bindParam(2, $usuarioDto->getFk_id_rol());
			$query->bindParam(3, $usuarioDto->getNombre());
			$query->bindParam(4, $usuarioDto->getApellido());
			$query->bindParam(5, $usuarioDto->getContrasena());
			$query->bindParam(6, $usuarioDto->getDocumento());
			$query->bindParam(7, 1);
			$query->bindParam(8, $usuarioDto->getNombre_usuario());
			
			$query->execute();
			$mensaje="Usuario registrado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function modificarUsuario(UsuarioDto $usuarioDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("UPDATE tbl_usuario SET fk_id_rol=?, nombre=?, apellido=?, contrasena=?, documento=?, activo=?, nombre_usuario=? WHERE id_usuario=?");
			$query->bindParam(1, $usuarioDto->getFk_id_rol());
			$query->bindParam(2, $usuarioDto->getNombre());
			$query->bindParam(3, $usuarioDto->getApellido());
			$query->bindParam(4, $usuarioDto->getContrasena());
			$query->bindParam(5, $usuarioDto->getDocumento());
			$query->bindParam(6, $usuarioDto->getActivo());
			$query->bindParam(7, $usuarioDto->getNombreUsuario());
			$query->bindParam(8, $usuarioDto->getIdUsuario());
			
			$query->execute();
			$mensaje="Usuario actualizado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function obtenerUsuario(UsuarioDto $usuarioDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_usuario WHERE id_usuario=?");
			$query->bindParam(1, $usuarioDto->getIdUsuario());
			
			$query->execute();
			return $query->fetch();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	
	public function eliminarUsuario(UsuarioDto $usuarioDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("DELETE FROM tbl_usuario WHERE id_usuario=?");
			$query->bindParam(1, $usuarioDto->getIdUsuario());
			
			$query->execute();
			$mensaje="Usuario eliminado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function listarUsuarios(UsuarioDto $usuarioDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_usuario");
			
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	function iniciarSesion($nombre_usuario, $contrasena){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query=$cnn->prepare("SELECT id_usuario FROM tbl_usuario WHERE nombre_usuario=? and contrasena=? and activo=1");
			$query->bindParam(1, $nombre_usuario);
			$query->bindParam(2, $contrasena);
		
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
}
