<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
</head>
<body>

	<?php 
		require ('dto/Vendedor.php'); 
		require ('dto/Categoria.php'); 
		require ('dto/Vehiculo.php'); 
		$vendedor = new Vendedor(1, "aa", 147);
		$categoria = new Categoria(1, "bb");
		$vehiculo = new Vehiculo(1, "cc", "nuevo", 123);
		echo $vehiculo->getPrecio();

	?>

		<table border="1">
			<thead>
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>telefono</th>
					<th>opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php   require 'conexion.php';
                        require 'dao/Usuario.php';
                        //require 'utilidades/Conexion.php';
                        $usuario = new UsuarioDao();
                        $allusers = $usuario->listarTodos();
                       foreach($allusers as $user) {?>
                    <tr>
                        <td> <?php echo $user['id']; ?> </td>
                        <td> <?php echo $user['nombre']; ?> </td>
                        <td> <?php echo $user['telefono']; ?> </td>
                        <td><a href="actualizar.php?id=<?php echo $user['id'];?>">editar</a></td>  
                        <td><a href="controladores/eliminar.php?id=<?php echo$user['id'];?>">eliminar</a></td>
                        <td><a href="informacionVehiculo.php?id=<?php echo$user['id'];?>">eliminar</a></td>
                    </tr>
                    <?php
                        }?>
			</tbody>


		</table>



</body>
</html>