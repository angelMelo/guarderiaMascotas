<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Mascota.php";


    $mascota = new Mascota();


        if (isset($_POST['id_mascota']) && !empty($_POST['id_mascota'])) {

            $id_mascota = $_POST['id_mascota'];
            $nombre_mascota = $_POST['nombre_mascota'];
            $edad = $_POST['edad'];
            $tamano = $_POST['tamano'];
            $peso = $_POST['peso'];
            $condicion_salud = $_POST['condicion_salud'];
            $comentarios = $_POST['comentarios'];
         
            $msg = $mascota->updateMascota($id_mascota, $nombre_mascota, $edad, $tamano, $peso, $condicion_salud, $comentarios);       

                        echo '<script type="text/javascript">

                            alert("La información se actualizo correctamente");

                            window.location.assign("../../index.php?pagina=mascotas");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al actualizar la información");

               window.location.assign("../../index.php?pagina=mascotas");

               </script>';

        }



?>