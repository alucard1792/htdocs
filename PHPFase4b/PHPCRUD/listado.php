<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <title>Listado</title>
        <script>
            function confirmar() {
                if (confirm('Esta seguro que desea borrar')) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

    </head>

    <body class="container">

        <center>

            <table class="table table-striped" border="1">

                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Clave</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                  <?php
                        require 'modelo.dao/UsuarioDao.php';
                        require 'modelo.dto/UsuarioDto.php';
                        require 'utilidades/Conexion.php';
                        $uDao = new UsuarioDao();
                        $allusers = $uDao->listarTodos();
                       foreach($allusers as $user) {?>
                    <tr>
                        <td> <?php echo $user['idUsuario']; ?>          </td>
                        <td> <?php echo $user['nombreUsuario']; ?>      </td>
                        <td> <?php echo $user['apellidoUsuario']; ?>    </td>
                        <td> <?php echo $user['direccionUsuario']; ?>   </td>
                        <td> <?php echo $user['claveUsuario']; ?>       </td>
                        <td><a href="modificar.php?id=<?php echo $user['idUsuario']; ?>"><img src="img/Modificar.png" width="48" class="img-thumbnail" height="48" alt="Modificar Registro"/></a></td>  
                        <td><a href="controladores/controlador.usuarios.php?id=<?php echo$user['idUsuario'];?>" onclick="return confirmar();"><img src="img/eliminar.png" width="48" height="48" class="img-thumbnail" alt="Eliminar Registro"/></a></td>
                    </tr>
                    <?php
                        }?>
                </tbody>

            </table>

        </center>
      
        <?php
        if (isset($_GET['mensaje'])) {
            ?>
        <div class="row"><br><br>
                <div class="col-md-6"></div>
                <div class="col-md-1 text-center"><h4><?php echo $mensaje = $_GET['mensaje']?></h4></div>
                <div class="col-md-5"></div>
            </div>
            <?php
        }
        ?>
       <div class="col-md-3 btn btn-success"><a href="registro.php" class="form-control">Registrarse</a></div>
    </body>

</html>
