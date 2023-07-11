<?php
require "model/GuarderiaModel.php";
require "controller/Tipo.php";
$tipo = new Tipo();
$id_cliente = $_POST['id_cliente'];
?>


<div>
  <div class="row">
        <p>
  </div>
  <div class="row">
      <div class="col-3">
            <h3>Agregar Mascota</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-8">
        <form method='POST' action='services/mascota/addMct.php'>
          <div>
            <input type="hidden" class="form-control" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nombre_mascota" class="form-label">Nombre de la mascota</label>
            <input type="text" class="form-control" name="nombre_mascota" id="nombre_mascota" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" id="edad" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tamano" class="form-label">Tamaño</label>
            <select name="tamano" id="tamano" class="form-select" aria-label="Default select example" required>
              <option disabled selected>Selecciona</option>
              <option value="Chico">Chico</option>
              <option value="Mediano">Mediano</option>
              <option value="Grande">Grande</option>
            </select>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="peso" class="form-label">Peso</label>
            <input type="number" step="0.01" class="form-control" name="peso" id="peso" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="condicion_salud" class="form-label">Condición de salud</label>
            <select name="condicion_salud" id="condicion_salud" class="form-select" aria-label="Default select example" required>
              <option disabled selected>Selecciona</option>
              <option value="Mala">Mala</option>
              <option value="Regular">Regular</option>
              <option value="Buena">Buena</option>
            </select>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="comentarios" class="form-label">Comentarios</label>
            <input type="text" class="form-control" name="comentarios" id="comentarios" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="id_tipo" class="form-label">Tipo de mascota</label>
            <select name="id_tipo" id="id_tipo" class="form-select" aria-label="Default select example" required>
            <option disabled selected>Selecciona</option>
                <?php
                foreach ($tipo->getTipo() as $fila) {
                    echo "<option value='".$fila['id_tipo']."'>".$fila['tipo']."</option>";
                }
                ?>
            </select>
          </div>
        <p>
      </div>
      <div class="col-2">
        <p><button type="submit" class="btn btn-primary btn-lg">Guardar</button></p>
        </form>
        <p><a href="?pagina=clientes"><button class="btn btn-danger btn-lg">Regresar</button></a></p>
      </div>
      <div class="col-2">

      </div>
  </div>
</div>
