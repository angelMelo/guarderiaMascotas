
<?php

  require "model/GuarderiaModel.php";
  require "controller/Servicio.php";
  $servicio = new Servicio();

?>

<div>
    <div class="row">
        <p>
    </div>
    <div class="row">
        <div class="col-3">
            <h3>Servicios finalizados</h3>
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
                                    <th scope='col'>Información</th>
                                </tr>
                            </thead>";

                        foreach ($servicio->getServicioFinalizado() as $fila) {

                        echo "<tbody>
                        <tr>
                            <td>
                                <p>Codigo cliente: ".$fila["id_cliente"]."</p>
                                <p>".$fila["nombre"]."</p>
                                <p>".$fila["apellido_paterno"]."</p>
                                <p>".$fila["apellido_materno"]."</p>                                                          
                            </td>
                            <td>
                                <p>Codigo mascota: ".$fila["id_mascota"]."</p>    
                                <p>Nombre: ".$fila["nombre_mascota"]."</p>  
                                <p>Entrada: ".$fila["hora_recepcion"]."</p>  
                                <p>Salida: ".$fila["hora_salida"]."</p>    
                                <p>Comentarios: ".$fila["comentarios"]."</p>                        
                            </td>
                        </tr></tbody>";

                    }

                    echo "</table>";

                ?>
            </div>
        </div>
        <div class="col-2">
            <p><a href="?pagina=servicios"><button type="button" class="btn btn-primary btn-lg">Servicios activos</button></a></p>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>