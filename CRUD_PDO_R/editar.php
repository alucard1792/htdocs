<?php 
	try {
	$db = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
	$codigo = $_GET['codigo'];
	$carros = $db->query("select * from carros where codigo = $codigo")->fetchAll(PDO::FETCH_OBJ);
	$filas = $db->query("select * from tipos_vehiculo")->fetchAll(PDO::FETCH_OBJ);
	$carro = $carros[0];
	} catch (PDOException $e) {
		echo $e;
	}
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 	<form action="actualizar.php" method="post">
 		<label for="codigo">codigo</label>
 		<input value="<?php echo $carro->id; ?>" type="text" name="codigo" readonly> <br>

 		<label for="marca">marca</label>
 		<input value="<?php echo $carro->marca; ?>" type="text" name="marca"> <br>

 		<label for="tipoVehiculo">tipoVehiculo</label>
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