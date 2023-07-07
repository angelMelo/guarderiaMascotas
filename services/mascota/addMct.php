<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Mascota.php";


    $mascota = new Mascota();


        if (isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])) {

            $id_cliente = $_POST['id_cliente'];
            $nombre_mascota = $_POST['nombre_mascota'];
            $edad = $_POST['edad'];
            $tamano = $_POST['tamano'];
            $peso = $_POST['peso'];
            $condicion_salud = $_POST['condicion_salud'];
            $comentarios = $_POST['comentarios'];
            $id_tipo = $_POST['id_tipo'];
         
            $msg = $mascota->setMascota($id_cliente, $nombre_mascota, $edad, $tamano, $peso, $condicion_salud, $comentarios, $id_tipo);       

                        echo '<script type="text/javascript">

                            alert("La información se agrego correctamente");

                            window.location.assign("../../index.php?pagina=mascotas");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al insertar la información");

               window.location.assign("../../index.php?pagina=mascotas");

               </script>';

        }



?>