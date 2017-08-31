<?php 
	require('util/Conexion.php');
	require('dto/Aprendizdto.php');
	require('dto/FichaAprendizdto.php');
	require('dto/Fichadto.php');
	require('dto/programadto.php');
	require('dao/Aprendizdao.php');
	require('dao/Programadao.php');

	$aprendizdao = new Aprendizdao();
	$programadao = new Programadao();
	$listaAprendiz = $aprendizdao->listarAprendiz();
	$listarPrograma = $programadao->listarProgramas();
session_start();
 ?>

 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>ejemplo maestro detalle</title>
	 </head>
	 <body>

	 	<form method="post" action="Controllers/CrearIngreso.php">

		 		<label for="listaAprendiz">listaAprendiz</label>
		 		<select id="listaAprendiz" name="listaAprendiz">
		 			<?php foreach ($listaAprendiz as $fila): ?>
		 				<option value="<?php echo $fila->id; ?>"><?php echo $fila->nombre; ?> <?php echo $fila->apellido; ?></option>
		 			<?php endforeach ?>
		 		</select>

		 		<input type="submit" name="agregarUsuario" value="agregarUsuario">
		 		<br><br>
		 		<label for="listarPrograma">listarPrograma</label>
		 		<select id="listarPrograma" name="listarPrograma">
		 			<?php foreach ($listarPrograma as $fila): ?>
		 				<option value="<?php echo $fila->id; ?>"><?php echo $fila->nombre; ?></option>
		 			<?php endforeach ?>
		 		</select>
		 		<br>
		 		<!--<label for="idFicha">idFicha</label>
		 		<input type="text" name="idFicha" id="idFicha">-->
		 		<br>
		 		<label for="fechaInicio">fechaInicio</label>
		 		<input type="text" name="fechaInicio" id="fechaInicio">	
		 		<br>
		 		<label for="fechaFin">fechaFin</label>
		 		<input type="text" name="fechaFin" id="fechaFin">	
		 		<br>
		 		<label for="cupo">cupo</label>
		 		<input type="text" name="cupo" id="cupo">
				<br>
		 		<input type="submit" name="registrar" value="enviar">

	 	</form>
	 	
	 </body>
 </html>