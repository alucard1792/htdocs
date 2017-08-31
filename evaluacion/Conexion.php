<?php

    $con=Conexion::getConexion();

    class Conexion {
   
    public static function getConexion() {
        $conn = null;

        try {
            $conn = new PDO("mysql:host=localhost;dbname=evaluacion", "root", "");
            $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "bien";
        } catch (PDOException $ex) {
            echo 'ERROR: ' . $ex->getMessage();
            echo "mal";

        }
        return $conn;

    }

}