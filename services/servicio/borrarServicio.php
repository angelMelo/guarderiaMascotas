<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Servicio.php";


    $servicio = new Servicio();


        if (isset($_POST['id_servicio']) && !empty($_POST['id_servicio'])) {

            $id_servicio = $_POST['id_servicio'];

         
            $msg = $servicio->deleteServicio($id_servicio);       

                        echo '<script type="text/javascript">

                            alert("La información se elimino correctamente");

                            window.location.assign("../../index.php?pagina=servicios");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al eliminar la información");

               window.location.assign("../../index.php?pagina=servicios");

               </script>';

        }



?>