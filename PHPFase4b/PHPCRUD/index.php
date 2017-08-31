<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once './modelo.dao/UsuarioDao.php';
require_once './modelo.dto/UsuarioDto.php';
require_once './utilidades/Conexion.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>

    <body class="container">

        <div class="row"><br><br>
            <div class="col-md-1"></div>
            <div class="col-md-3 btn btn-success"><a href="registro.php" class="form-control">Registrarse</a></div>
            <div class="col-md-3 btn btn-success"><a href="listado.php" class="form-control">Consultar</a></div>
        </div>

        <h1 class="text-center"> Probando BOOTSTRAP</h1>

        <div class="row"> 
            <div class="col-lg-3">3</div> 
            <div class="col-lg-6">6</div> 
            <div class="col-lg-3">3</div> 
        </div>

    </body>

</html>
