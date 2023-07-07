<?php


class Servicio extends GuarderiaModel

{

    function setServicio($id_cliente, $id_mascota){

        $sql = "INSERT INTO servicio (id_cliente, id_mascota, hora_recepcion, comentarios, estatus)
        VALUES ($id_cliente, $id_mascota, NOW(), 'Recibido', 1);";

        return $this->select($sql);

    }


    function getServicio(){

        $sql = "
        SELECT a.id_servicio as id_servicio, a.id_cliente as id_cliente, b.nombre as nombre, b.apellido_paterno as apellido_paterno, 
        b.apellido_materno as apellido_materno, a.id_mascota as id_mascota, a.hora_recepcion as hora_recepcion, a.hora_salida as hora_salida, 
        a.comentarios as comentarios, c.nombre_mascota as nombre_mascota   
        FROM servicio a 
        LEFT JOIN 
        cliente  b ON a.id_cliente = b.id_cliente 
        LEFT JOIN 
        mascota_cliente  c ON a.id_mascota = c.id_mascota  
        WHERE a.estatus = 1 
        ORDER BY a.id_servicio DESC;
        ";

        return $this->select($sql);

    } 

    function getServicioFinalizado(){

        $sql = "
        SELECT a.id_servicio as id_servicio, a.id_cliente as id_cliente, b.nombre as nombre, b.apellido_paterno as apellido_paterno, 
        b.apellido_materno as apellido_materno, a.id_mascota as id_mascota, a.hora_recepcion as hora_recepcion, a.hora_salida as hora_salida, 
        a.comentarios as comentarios, c.nombre_mascota as nombre_mascota   
        FROM servicio a 
        LEFT JOIN 
        cliente  b ON a.id_cliente = b.id_cliente 
        LEFT JOIN 
        mascota_cliente  c ON a.id_mascota = c.id_mascota  
        WHERE a.estatus = 0  
        ORDER BY a.id_servicio DESC;
        ";

        return $this->select($sql);

    } 

    function deleteServicio($id_servicio){

        $sql = "DELETE FROM servicio WHERE id_servicio = $id_servicio;";

        return $this->select($sql);

    }

    function updateServicio($id_servicio){

        $sql = "UPDATE servicio SET hora_salida=NOW(), estatus=0 WHERE id_servicio = $id_servicio;";

        return $this->select($sql);

    }

}

?>