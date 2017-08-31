		<?php 
			require_once("Clase.php");
			$listado = new Producto("mysql:dbname=tienda_pdo;host=localhost", "root", "");
			$listado->conexion();
			$cols = "codigo,nombre,precio,marca";



		 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listado</title>
	</head>
	<body>

		<table border="1">
			<THEAD>
				<TH>CODIGO</TH>
				<TH>NOMBRE</TH>
				<TH>PRECIO</TH>
				<TH>MARCA</TH>
			</THEAD>
			<?php 
				$listado->listar($cols, "productos");

			 ?>
		</table>
	</body>
</html>