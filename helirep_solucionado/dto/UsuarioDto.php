<?php

class UsuarioDto {
	private $id_usuario=0, $fk_id_rol=0, $nombre="", $apellido="", $contrasena="", $documento="", $activo=1, $nombre_usuario="";
	
	function getId_usuario() {
		return $this->id_usuario;
	}

	function getFk_id_rol() {
		return $this->fk_id_rol;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getApellido() {
		return $this->apellido;
	}

	function getContrasena() {
		return $this->contrasena;
	}

	function getDocumento() {
		return $this->documento;
	}

	function getActivo() {
		return $this->activo;
	}

	function getNombre_usuario() {
		return $this->nombre_usuario;
	}

	function setId_usuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}

	function setFk_id_rol($fk_id_rol) {
		$this->fk_id_rol = $fk_id_rol;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setApellido($apellido) {
		$this->apellido = $apellido;
	}

	function setContrasena($contrasena) {
		$this->contrasena = $contrasena;
	}

	function setDocumento($documento) {
		$this->documento = $documento;
	}

	function setActivo($activo) {
		$this->activo = $activo;
	}

	function setNombre_usuario($nombre_usuario) {
		$this->nombre_usuario = $nombre_usuario;
	}


}
