<?php


class Tipo extends GuarderiaModel

{
    function setTipoMascota($tipo, $descripcion){

        $sql = "INSERT INTO tipo_mascota (tipo, descripcion) 
        VALUES ('$tipo', '$descripcion');";

        return $this->select($sql);

    }

    function getTipo(){

        $sql = "SELECT * FROM tipo_mascota ORDER BY id_tipo DESC;";

        return $this->select($sql);

    } 
}

?>