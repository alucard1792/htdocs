<?php

require_once '../dao/UsuarioDao.php';
require_once '../dto/UsuarioDto.php';
require_once '../utilidades/conexion.php';
require_once '../utilidades/dialogMessages.php';

$dialogs = new dialogMessages();

if (isset($_POST['registro'])){
	$uDao=new UsuarioDao();
	$uDto=new UsuarioDto();
	$uDto->setNombre($POST_['nombre']);
	$uDto->setApellido($POST_['apellido']);
	$uDto->setTbl_rol_id_rol($POST_['rol']);
	$uDto->setContrasena($POST_['contrasena']);
	$uDto->setDocumento($POST_['documento']);
	$uDto->setActivo($POST_['activo']);
	$uDto->setNombreUsuario($POST_['nombreUsuario']);
	
	$mensaje = $uDao->registrarUsuario($uDto);
	
	header("Location: ../registroUsuarios.php?mensaje=".$mensaje);
} else if (isset($_GET['id']) != NULL) {
    $uDao = new UsuarioDao();
    
    $mensaje = $uDao->eliminarUsuario($_GET['id']);
    
    header("Location: ../listarUsuarios.php?mensaje=".$mensaje);
    
} else if (isset($_POST['modificar'])) {
    $uDao = new UsuarioDao();
	$uDto=new UsuarioDto();
	
	$uDto->setNombre($POST_['nombre']);
	$uDto->setApellido($POST_['apellido']);
	$uDto->setTbl_rol_id_rol($POST_['rol']);
	$uDto->setContrasena($POST_['contrasena']);
	$uDto->setDocumento($POST_['documento']);
	$uDto->setActivo($POST_['activo']);
	$uDto->setNombreUsuario($POST_['nombreUsuario']);
    
    $mensaje = $uDao->modificarUsuario($uDto);
    header("Location: ../listarUsuarios.php?mensaje=".$mensaje);
    
} elseif (isset ($_POST['iniciarSesion'])) {
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	$uDao = new UsuarioDao();
	
	$idUsuario=$uDao->iniciarSesion($usuario, $contrasena);
	if($idUsuario == NULL){
		session_start();
		$_SESSION['dialogTitle'] = NULL;
		$_SESSION['dialogContent'] = "El nombre de usuario o la contraseña son incorrectos";
		session_write_close();
		header("Location:/helirep/auth/index.php?error=1");
	}else{
		session_start();
		$_SESSION['idUsuario']=$idUsuario;
		$_SESSION['token'] = md5(sha1(rand(1,100000)));
		header("Location:../index.php");
	}
}