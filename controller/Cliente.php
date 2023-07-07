<?php


class Cliente extends GuarderiaModel

{


    function setCliente($nombre, $apellido_paterno, $apellido_materno, $direccion, $ciudad, $codigo_postal, $estado){

        $sql = "INSERT INTO cliente (nombre, apellido_paterno, apellido_materno, direccion, ciudad, codigo_postal, estado)
        VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$direccion', '$ciudad', $codigo_postal, '$estado');";

        return $this->select($sql);

    }

    function getCliente(){

        $sql = "SELECT * FROM cliente ORDER BY id_cliente DESC;";

        return $this->select($sql);

    } 

    function getClienteById($id_cliente){

        $sql = "
        SELECT a.id_cliente as id_cliente, a.nombre as nombre, a.apellido_paterno as apellido_paterno, a.apellido_materno as apellido_materno, a.direccion as direccion, a.ciudad as ciudad, a.codigo_postal as codigo_postal, a.estado as estado, b.numero_contacto as numero_contacto    
        FROM cliente a 
        LEFT JOIN 
        contacto_cliente  b ON a.id_cliente = b.id_cliente 
        WHERE a.id_cliente = $id_cliente;
        ";
        
        return $this->select($sql);

    } 

    function deleteCliente($id_cliente){

        $sql = "DELETE FROM cliente WHERE id_cliente = $id_cliente;";

        return $this->select($sql);

    }

    function updateCliente($id_cliente, $nombre, $apellido_paterno, $apellido_materno, $direccion, $ciudad, $codigo_postal, $estado){

        $sql = "UPDATE cliente SET nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', direccion='$direccion', ciudad='$ciudad', codigo_postal=$codigo_postal, estado='$estado' WHERE id_cliente = $id_cliente;";

        return $this->select($sql);

    }



}    


?>