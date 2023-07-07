<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Servicio.php";


    $servicio = new Servicio();


        if (isset($_POST['id_mascota']) && !empty($_POST['id_mascota'])) {

            $id_cliente = $_POST['id_cliente'];
            $id_mascota = $_POST['id_mascota'];

         
            $msg = $servicio->setServicio($id_cliente, $id_mascota);       

                        echo '<script type="text/javascript">

                            alert("La información se actualizo correctamente");

                            window.location.assign("../../index.php?pagina=servicios");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al actualizar la información");

               window.location.assign("../../index.php?pagina=servicios");

               </script>';

        }



?>