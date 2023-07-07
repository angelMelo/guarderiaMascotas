
<?php

  require "model/GuarderiaModel.php";
  require "controller/Mascota.php";
  require "controller/Tipo.php";
  $mascota = new Mascota();
  $tipo_mascota = new Tipo();

?>

<div>
    <div class="row">
        <p>
    </div>
    <div class="row">
        <div class="col-3">
            <h1>Mascotas</h1>
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
                                    <th scope='col'>Detalles</th>
                                </tr>
                            </thead>";

                        foreach ($mascota->getMascota() as $fila) {

                        echo "<tbody>
                        <tr>
                            <td>
                                <p>Codigo mascota: ".$fila["id_mascota"]."</p>
                                <p>".$fila["nombre_mascota"]."</p>
                                <p>Codigo cliente: ".$fila["id_cliente"]."</p>
                                <p>".$fila["nombre_cliente"]."</p>
                                <p>".$fila["apellido_paterno"]."</p>
                                <p>".$fila["apellido_materno"]."</p>                             
                            </td>
                            <td>
                                <p>Edad: ".$fila["edad"]." años</p>
                                <p>Tamaño: ".$fila["tamano"]."</p>
                                <p>Salud: ".$fila["condicion_salud"]."</p>
                                <p>Comentarios: ".$fila["comentarios"]."</p>    
                                <p>Tipo: ".$fila["tipo"]."</p>                                
                            </td>
                        </tr></tbody>";

                    }

                    echo "</table>";

                ?>
            </div>
        </div>
        <div class="col-2">
            <p><a href="?pagina=agregaTipoMascota"><button type="button" class="btn btn-primary btn-lg">Agregar tipo de mascota</button></a></p>
            <p><h3>Tipos de mascota</h3></p>
            <p>
                <?php
                    foreach ($tipo_mascota->getTipo() as $dato) {
                        echo "<p>- ".$dato["tipo"]."</p>";
                    }
                ?>
            </p>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>