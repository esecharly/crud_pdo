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
    }
?>