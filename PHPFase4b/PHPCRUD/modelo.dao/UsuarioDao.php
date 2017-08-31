<?php

class UsuarioDao {

    public function registrarUsuario(UsuarioDto $usuarioDto) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("INSERT INTO Usuarios VALUES(?,?,?,?,?)");
            $query->bindParam(1, $usuarioDto->getIdUsuario());
            $query->bindParam(2, $usuarioDto->getNombre());
            $query->bindParam(3, $usuarioDto->getApellido());
            $query->bindParam(4, $usuarioDto->getDireccion());
            $query->bindParam(5, $usuarioDto->getClave());
            
            $query->execute();
            $mensaje="Registrado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn =null;
        return $mensaje;
    }
public function modificarUsuario(UsuarioDto $usuarioDto) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE  Usuarios SET nombreUsuario=?,apellidoUsuario=?,direccionUsuario=?,claveUsuario=? where idUsuario=?");
           
            $query->bindParam(1, $usuarioDto->getNombre());
            $query->bindParam(2, $usuarioDto->getApellido());
            $query->bindParam(3, $usuarioDto->getDireccion());
            $query->bindParam(4, $usuarioDto->getClave());
             $query->bindParam(5, $usuarioDto->getIdUsuario());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn=null;
        return $mensaje;
    }
    public function obtenerUsuario($idUsuario) {
        $cnn = Conexion::getConexion();        
        try {
            $query = $cnn->prepare('SELECT * FROM Usuarios WHERE idUsuario = ?');
            $query->bindParam(1, $idUsuario);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
         $cnn=null;
    }
public function eliminarUsuario($idUsuario) {
        $cnn = Conexion::getConexion();  
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM Usuarios WHERE idUsuario = ?");
            $query->bindParam(1, $idUsuario);
            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
           $mensaje = $ex->getMessage();  
        }
        return $mensaje;
    }
    public function listarTodos() {
        $cnn = Conexion::getConexion();

        try {
            $listarUsuarios = 'Select * from usuarios';
            $query = $cnn->prepare($listarUsuarios);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }

   

}
