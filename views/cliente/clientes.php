<?php

  require "model/GuarderiaModel.php";
  require "controller/Cliente.php";
  $cliente = new Cliente();

?>

<div>
    <div class="row">
        <p>
    </div>
    <div class="row">
        <div class="col-3">
            <h1>Clientes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="table-responsive">
                <?php
                    echo "<table class='table align-middle table-hover'>
                            <thead>
                                <tr>
                                    <th scope='col'>Cliente</th>
                                    <th scope='col'>Dirección</th>
                                    <th scope='col'>Opciones</th>
                                </tr>
                            </thead>";

                        foreach ($cliente->getCliente() as $fila) {

                        echo "<tbody>
                        <tr>
                            <td>
                                <p>Codigo: ".$fila["id_cliente"]."</p>
                                <p>".$fila["nombre"]."</p>
                                <p>".$fila["apellido_paterno"]."</p>
                                <p>".$fila["apellido_materno"]."</p>                                
                            </td>
                            <td>
                                <p>".$fila["direccion"]."</p>
                                <p>CP: ".$fila["codigo_postal"]."</p>
                                <p>Ciudad: ".$fila["ciudad"]."</p>
                                <p>Estado: ".$fila["estado"]."</p>                                
                            </td>
                            <td>
                                <p><form method='POST' action='?pagina=consultarCliente'><input type='hidden' name='id_cliente' value=".$fila["id_cliente"]."><button type='submit' class='btn btn-primary btn-sm btn-block'>Consultar</button></form></p>
                                <p><form method='POST' action='?pagina=actualizarCliente'><input type='hidden' name='id_cliente' value=".$fila["id_cliente"]."><button type='submit' class='btn btn-success btn-sm btn-block'>Actualizar</button></form></p>
                                <p><form method='POST' action='services/cliente/borrarCliente.php'><input type='hidden' name='id_cliente' value=".$fila["id_cliente"]."><button type='submit' class='btn btn-danger btn-sm btn-block'>X Eliminar</button></form></p>
                            </td>
                        </tr></tbody>";

                    }

                    echo "</table>";

                ?>
            </div>
        </div>
        <div class="col-2">
            <a href="?pagina=agregaCliente"><button type="button" class="btn btn-primary btn-lg">Agregar cliente</button></a>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>