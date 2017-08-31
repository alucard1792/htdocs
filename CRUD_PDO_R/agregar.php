<?php 
	try {
	$db = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
	$filas = $db->query("select * from tipos_vehiculo")->fetchAll(PDO::FETCH_OBJ);

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
 	
 	<form action="crear.php" method="post">
 		<label for="marca">marca</label>
 		<input type="text" name="marca"> <br>
 		<label for="tipoVehiculo">tipoVehiculo</label>
 		<select name="tipoVehiculo">
 			<option>seleccione un vehiculo</option>
 			<?php foreach ($filas as $fila): ?>
 				<option value="<?php echo $fila->id; ?>"><?php echo $fila->descripcion ?></option>
 			<?php endforeach ?>
 		</select>
 		<input type="submit" value="crear">
 	</form>

 </body>
 </html>