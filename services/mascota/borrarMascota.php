<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Mascota.php";


    $mascota = new Mascota();


        if (isset($_POST['id_mascota']) && !empty($_POST['id_mascota'])) {

            $id_mascota = $_POST['id_mascota'];

         
            $msg = $mascota->deleteMascota($id_mascota);       

                        echo '<script type="text/javascript">

                            alert("La información se elimino correctamente");

                            window.location.assign("../../index.php?pagina=mascotas");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al eliminar la información");

               window.location.assign("../../index.php?pagina=mascotas");

               </script>';

        }



?>