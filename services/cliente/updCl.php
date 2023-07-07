<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Cliente.php";


    $cliente = new Cliente();


        if (isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])) {

            $id_cliente = $_POST['id_cliente'];
            $nombre = $_POST['nombre'];
            $apellido_paterno = $_POST['apellido_paterno'];
            $apellido_materno = $_POST['apellido_materno'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];
            $codigo_postal = $_POST['codigo_postal'];
            $estado = $_POST['estado'];

         
            $msg = $cliente->updateCliente($id_cliente, $nombre, $apellido_paterno, $apellido_materno, $direccion, $ciudad, $codigo_postal, $estado);       

                        echo '<script type="text/javascript">

                            alert("La información se actualizo correctamente");

                            window.location.assign("../../index.php?pagina=clientes");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al actualizar la información");

               window.location.assign("../../index.php?pagina=clientes");

               </script>';

        }



?>