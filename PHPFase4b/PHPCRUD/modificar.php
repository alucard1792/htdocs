<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">        <title></title>
    </head>

    <body>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php
                    require 'modelo.dao/UsuarioDao.php';
                    require 'modelo.dto/UsuarioDto.php';
                    require 'utilidades/Conexion.php';
                    if($_GET['id']!=NULL){
                    $uDao = new UsuarioDao();
                    $usuario = $uDao->obtenerUsuario($_GET['id']);
                    }
                    ?>       
                    <h1>Modificar los datos del usuario</h1>
                <form action="controladores/controlador.usuarios.php" method="POST">
                  
                    <label>Documento</label>
                    <input type="text" name="documento" required value="<?php echo $usuario['idUsuario'];?>" class="form-control"><br>
                    <label>Nombre</label>
                    <input type="text" name="nombre" required value="<?php echo $usuario['nombreUsuario'];?>" class="form-control"><br>
                    <label>Apellido</label>
                    <input type="text" name="apellido" required value="<?php echo $usuario['apellidoUsuario'];?>" class="form-control"><br>
                    <label>Direccion</label>
                    <input type="text" name="direccion" required value="<?php echo $usuario['direccionUsuario'];?>" class="form-control"><br>
                    <label>Contraseña</label>
                    <input type="password" name="clave" required value="<?php echo $usuario['claveUsuario'];?>" class="form-control"><br>
                      
                    <input type="submit" name="modificar" id="modificar" class="btn btn-success" value="Modificar">

                </form>

            </div>
            <div class="col-md-4"></div>
        </div>
      <?php
        if (isset($_GET['mensaje'])) {
            ?>
        <div class="row"><br><br>
                <div class="col-md-6"></div>
                <div class="col-md-1 text-center"><h4><span class="label label-default"><?php echo $mensaje = $_GET['mensaje']?></span></h4></div>
                <div class="col-md-5"></div>
            </div>
            <?php
        }
        ?>
        
    </body>

</html>