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
 * Description of UsuarioDto
 *
 * @author APRENDIZ
 */
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
