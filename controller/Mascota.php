<?php


class Mascota extends GuarderiaModel

{


    function setMascota($id_cliente, $nombre_mascota, $edad, $tamano, $peso, $condicion_salud, $comentarios, $id_tipo){

        $sql = "INSERT INTO mascota_cliente (id_cliente, nombre_mascota, edad, tamano, peso, condicion_salud, comentarios, id_tipo) 
        VALUES ($id_cliente, '$nombre_mascota', $edad, '$tamano', $peso, '$condicion_salud', '$comentarios', $id_tipo);";

        return $this->select($sql);

    }

    function getMascota(){

        $sql = "
        SELECT a.id_mascota as id_mascota, a.id_cliente as id_cliente, b.nombre as nombre_cliente, 
        b.apellido_paterno as apellido_paterno, b.apellido_materno as apellido_materno, a.nombre_mascota as nombre_mascota, 
        a.edad as edad, a.tamano as tamano, a.peso as peso, a.condicion_salud as condicion_salud, a.comentarios as comentarios, c.tipo as tipo 
        FROM mascota_cliente a 
        LEFT JOIN 
        cliente  b ON a.id_cliente = b.id_cliente 
        LEFT JOIN 
        tipo_mascota  c ON a.id_tipo = c.id_tipo 
        ORDER BY a.id_mascota DESC;
        ";

        return $this->select($sql);

    } 

    function getMascotaById($id_mascota){

        $sql = "SELECT * FROM mascota_cliente WHERE id_mascota = $id_mascota;";
        
        return $this->select($sql);

    } 

    function getMascotaByIdCliente($id_cliente){

        $sql = "SELECT * FROM mascota_cliente WHERE id_cliente = $id_cliente;";
        
        return $this->select($sql);

    } 

    function deleteMascota($id_mascota){

        $sql = "DELETE FROM mascota_cliente WHERE id_mascota = $id_mascota;";

        return $this->select($sql);

    }

    function updateMascota($id_mascota, $nombre_mascota, $edad, $tamano, $peso, $condicion_salud, $comentarios){

        $sql = "UPDATE mascota_cliente SET nombre_mascota='$nombre_mascota', edad=$edad, tamano='$tamano', peso=$peso, condicion_salud='$condicion_salud', comentarios='$comentarios' WHERE id_mascota = $id_mascota;";

        return $this->select($sql);

    }

}    


?>