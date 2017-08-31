<?php 
	require('../util/Conexion.php');

	require('../dto/Aprendizdto.php');
	require('../dao/Aprendizdao.php');

	require('../dto/FichaAprendizdto.php');
	require('../dao/FichaAprendizdao.php');

	require('../dto/Fichadto.php');
	require('../dao/Fichadao.php');

	require('../dto/programadto.php');
	require('../dao/Programadao.php');	

	session_start();

	$aprendizdao = new Aprendizdao();
	$fichaAprendizdao = new FichaAprendizdao();
	$fichadao = new Fichadao();
	$programadao = new Programadao();

	//array_push($_SESSION['aprendiz'], $_POST['listaAprendiz']);
	$_SESSION['aprendiz'][] = $_POST['listaAprendiz'];
	$idPrograma = $_POST['listarPrograma'];

	$fechaInicio = $_POST['fechaInicio'];
	$fechaFin = $_POST['fechaFin'];
	$cupo = $_POST['cupo'];

	print_r($_SESSION);
	echo $idPrograma;
	echo $fechaInicio;
	echo $fechaFin;
	echo $cupo;



	

 ?>