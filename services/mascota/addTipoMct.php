<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Tipo.php";


    $tipo = new Tipo();


        if (isset($_POST['tipo_mascota']) && !empty($_POST['tipo_mascota'])) {

            $tipo_mascota = $_POST['tipo_mascota'];
         
            $msg = $tipo->setTipoMascota($tipo_mascota, $descripcion);       

                        echo '<script type="text/javascript">

                            alert("La información se agrego correctamente");

                            window.location.assign("../../index.php?pagina=agregaTipoMascota");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al insertar la información");

               window.location.assign("../../index.php?pagina=agregaTipoMascota");

               </script>';

        }



?>