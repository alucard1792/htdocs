<?php  

class conexion {
    public static function getConexion(){
        $con=null;
        try{
            $con = new PDO("mysql:host=localhost;dbname=maestro_detalle", "root", "");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo 'ERROR: '.$ex->getMessage();
        }
        return $con;
    }
}