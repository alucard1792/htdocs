<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">   
    </head>

    <body class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form action="controladores/controlador.usuarios.php" method="POST">

                    <h3>Registro</h3><br>
                    <label>Documento</label>
                    <input type="text" name="documento" required class="form-control"><br>
                    <label>Nombre</label>
                    <input type="text" name="nombre" required class="form-control"><br>
                    <label>Apellido</label>
                    <input type="text" name="apellido" required class="form-control"><br>
                    <label>Direccion</label>
                    <input type="text" name="direccion" required class="form-control"><br>
                    <label>Contraseña</label>
                    <input type="password" name="clave" required class="form-control"><br>
                                      
                    <input type="submit" name="registro" id="registro" value="Registrarse" class="btn btn-success">

                </form>

            </div>

            <div class="col-md-4"></div>

        </div>

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

        <div class="col-md-3 btn btn-success"><a href="listado.php" class="form-control">Consultar</a></div>
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
