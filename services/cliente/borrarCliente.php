<?php

require "../../model/GuarderiaModel.php";

require "../../controller/Cliente.php";


    $cliente = new Cliente();


        if (isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])) {

            $id_cliente = $_POST['id_cliente'];

         
            $msg = $cliente->deleteCliente($id_cliente);       

                        echo '<script type="text/javascript">

                            alert("La información se elimino correctamente");

                            window.location.assign("../../index.php?pagina=clientes");

                            </script>';



        } else {

	    echo '<script type="text/javascript">

               alert("X Ha ocurrido un error al eliminar la información");

               window.location.assign("../../index.php?pagina=clientes");

               </script>';

        }



?>