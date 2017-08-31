<?php 
	require 'conexion.php';
	$id = $_GET['id'];
	$filas = $con->query("select * from vendedor where id = $id")->fetchAll(PDO::FETCH_OBJ);
	$vendedor = $filas[0];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 	<form action="controladores/editar.php" method="post">

 		<label for="id">id</label>
 		<input value="<?php echo $vendedor->id; ?>" type="text" name="id" readonly> <br>

 		<label for="nombre">nombre</label>
 		<input value="<?php echo $vendedor->nombre; ?>" type="text" name="nombre"> <br>

 		<label for="telefono">telefono</label>
 		<input value="<?php echo $vendedor->telefono; ?>" type="text" name="telefono">
 		<select name="tipoVehiculo">
 			<option>seleccione un vehiculo</option>
 			<?php foreach ($filas as $fila): ?>
 				<?php if ($fila->id == $carro->tipos_vehiculo_id): ?>
 					<option selected="" value="<?php echo $fila->id; ?>"><?php echo $fila->descripcion ?></option>
 					
 				<?php else: ?>
 					<option value="<?php echo $fila->id; ?>"><?php echo $fila->descripcion ?></option>
 					
 				<?php endif ?>
 			<?php endforeach ?>
 		</select>

 		<input type="submit" value="editar">
 	</form>

 </body>
 </html>