<?php

    require_once "conexion.php";

    class Crud extends Conexion{
        public function mostrarDatos(){
            $sql = "SELECT id,
                            nombre,
                            sueldo,
                            edad,
                            fRegistro
                    FROM t_crud";
            $query = Conexion::conectar()->prepare($sql);     
            $query->execute();
            return $query->fetchAll();
            $query = null;   
        }

        public function insertarDatos($datos){
            $sql = "INSERT INTO t_crud (nombre, sueldo, edad, fRegistro)
                                VALUES (:nombre, :sueldo, :edad, :fRegistro)";
            $query = Conexion::conectar()->prepare($sql);
            $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);                    
            $query->bindParam(":sueldo", $datos["sueldo"], PDO::PARAM_STR);                    
            $query->bindParam(":edad", $datos["edad"], PDO::PARAM_INT);                    
            $query->bindParam(":fRegistro", $datos["fecha"], PDO::PARAM_STR);  
            
            return $query->execute();

            $query = null;
        }
    }
?>