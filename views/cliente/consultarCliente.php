<?php

  require "model/GuarderiaModel.php";
  require "controller/Cliente.php";
  require "controller/Mascota.php";
  $cliente = new Cliente();
  $mascota = new Mascota();
  $id_cliente = $_POST['id_cliente'];
  $info = $cliente->getClienteById($id_cliente);
  $nombre = $info[0]['nombre'];
  $apellido_paterno = $info[0]['apellido_paterno'];
  $apellido_materno = $info[0]['apellido_materno'];
  $direccion = $info[0]['direccion'];
  $ciudad = $info[0]['ciudad'];
  $codigo_postal = $info[0]['codigo_postal'];
  $estado = $info[0]['estado'];
  $numero_contacto = $info[0]['numero_contacto'];

?>

<div>
    <div class="row">
        <p>
    </div>
    <div class="row">
        <div class="col-3">
            <h3>Cliente folio: <?php echo $id_cliente;?></h3>
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
                                    <th scope='col'>Contacto</th>
                                </tr>
                            </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>Codigo: ".$id_cliente."</p>
                                <p>".$nombre."</p>
                                <p>".$apellido_paterno."</p>
                                <p>".$apellido_materno."</p>                                
                            </td>
                            <td>
                                <p>".$direccion."</p>
                                <p>CP: ".$codigo_postal."</p>
                                <p>Ciudad: ".$ciudad."</p>
                                <p>Estado: ".$estado."</p>                                
                            </td>
                            <td>
                                <p>Tel: ".$numero_contacto."</p>  
                            </td>
                        </tr>
                        </tbody>
                    </table>";

                ?>
            </div>
        </div>
        <div class="col-2">
            <p><form method='POST' action='?pagina=agregaMascota'><input type='hidden' name='id_cliente' value="<?php echo $id_cliente;?>"><button type='submit' class="btn btn-primary btn-lg">Agregar mascota</button></form></p>
            <p><a href="?pagina=clientes"><button class="btn btn-danger btn-lg">Regresar</button></a></p>
        </div>
        <div class="col-2">

        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Mascotas del cliente folio: <?php echo $id_cliente;?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="table-responsive">
                <?php
                    echo "<table class='table align-middle table-hover'>
                            <thead>
                                <tr>
                                    <th scope='col'>Datos</th>
                                    <th scope='col'>Opciones</th>
                                </tr>
                            </thead>";

                        foreach ($mascota->getMascotaByIdCliente($id_cliente) as $fila) {

                        echo "<tbody>
                        <tr>
                            <td>
                                <p>Codigo mascota: ".$fila["id_mascota"]."</p>
                                <p>Nombre: ".$fila["nombre_mascota"]."</p>    
                                <p>Edad: ".$fila["edad"]." años</p>
                                <p>Tamaño: ".$fila["tamano"]."</p>
                                <p>Salud: ".$fila["condicion_salud"]."</p>
                                <p>Comentarios: ".$fila["comentarios"]."</p>                          
                            </td>
                            <td>
                                <p><form method='POST' action='services/servicio/startServicio.php'><input type='hidden' name='id_mascota' value=".$fila["id_mascota"]."><input type='hidden' name='id_cliente' value=".$fila["id_cliente"]."><button type='submit' class='btn btn-primary btn-sm btn-block'>+ Servicio</button></form></p>
                                <p><form method='POST' action='?pagina=actualizarMascota'><input type='hidden' name='id_mascota' value=".$fila["id_mascota"]."><button type='submit' class='btn btn-success btn-sm btn-block'>Actualizar</button></form></p>
                                <p><form method='POST' action='services/mascota/borrarMascota.php'><input type='hidden' name='id_mascota' value=".$fila["id_mascota"]."><button type='submit' class='btn btn-danger btn-sm btn-block'>X Eliminar</button></form></p>
                            </td>
                        </tr></tbody>";

                    }

                    echo "</table>";

                ?>
            </div>
        </div>
    </div>    
</div>