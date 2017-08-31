<?php 
try {
	$db = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
	$filas = $db->query("select codigo, marca, tipos_vehiculo_id, descripcion from carros, tipos_vehiculo where tipos_vehiculo_id = id;")->fetchAll(PDO::FETCH_OBJ);
	
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
 	<table border="1">
 		<thead>
 			<th>codigo</th>
 			<th>marca</th>
 			<th>descripcion</th>
 			<th>editar</th>
 			<th>eliminar</th>
 			<th>informacion vehiculo</th>
 		</thead>
 		<tbody>
 			<?php foreach ($filas as $fila): ?>
 				<tr>
 					<th><?php echo $fila->codigo; ?></th>
 					<th><?php echo $fila->marca; ?></th>
 					<th><?php echo $fila->descripcion; ?></th>
 					<th><a href="editar.php?codigo=<?php echo $fila->codigo; ?>">editar</a></th>
 					<th><a href="eliminar.php?codigo=<?php echo $fila->codigo; ?>">eliminar</a></th>
  					<th><a href="eliminar.php?codigo=<?php echo $fila->codigo; ?>">eliminar</a></th>
 				</tr>
 			<?php endforeach ?>
 		</tbody>
 	</table>
 	<a href="agregar.php">ingresar nuevo</a>
 </body>
 </html>