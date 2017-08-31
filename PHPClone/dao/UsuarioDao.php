<?php

/*
 * The MIT License
 *
 * Copyright 2017 APRENDIZ.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Description of UsuarioDao
 *
 * @author APRENDIZ
 */
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
