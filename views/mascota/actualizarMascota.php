<?php
require "model/GuarderiaModel.php";
require "controller/Mascota.php";
$mascota = new Mascota();
$id_mascota = $_POST['id_mascota'];
$info = $mascota->getMascotaById($id_mascota);
$nombre_mascota = $info[0]['nombre_mascota'];
$edad = $info[0]['edad'];
$tamano = $info[0]['tamano'];
$peso = $info[0]['peso'];
$condicion_salud = $info[0]['condicion_salud'];
$comentarios = $info[0]['comentarios'];
?>


<div>
  <div class="row">
        <p>
  </div>
  <div class="row">
      <div class="col-3">
            <h3>Actualizar Mascota</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-8">
        <form method='POST' action='services/mascota/updMct.php'>
          <div>
            <input type="hidden" class="form-control" name="id_mascota" id="id_mascota" value="<?php echo $id_mascota;?>" required>
          </div>
          <div class="mb-3">
            <label for="nombre_mascota" class="form-label">Nombre de la mascota</label>
            <input type="text" class="form-control" name="nombre_mascota" id="nombre_mascota" value="<?php echo $nombre_mascota;?>" required>
          </div>
          <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" id="edad" value="<?php echo $edad;?>" required>
          </div>
          <div class="mb-3">
            <label for="tamano" class="form-label">Tamaño</label>
            <select name="tamano" id="tamano" class="form-select" aria-label="Default select example" required>
              <option value="<?php echo $tamano;?>"><?php echo $tamano;?></option>
              <option value="Chico">Chico</option>
              <option value="Mediano">Mediano</option>
              <option value="Grande">Grande</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="peso" class="form-label">Peso</label>
            <input type="number" step="0.01" class="form-control" name="peso" id="peso" value="<?php echo $peso;?>" required>
          </div>
          <div class="mb-3">
            <label for="condicion_salud" class="form-label">Condición de salud</label>
            <select name="condicion_salud" id="condicion_salud" class="form-select" aria-label="Default select example" required>
              <option value="<?php echo $condicion_salud;?>"><?php echo $condicion_salud;?></option>
              <option value="Mala">Mala</option>
              <option value="Regular">Regular</option>
              <option value="Buena">Buena</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="comentarios" class="form-label">Comentarios</label>
            <input type="text" class="form-control" name="comentarios" id="comentarios" value="<?php echo $comentarios;?>" required>
          </div>
        <p>
      </div>
      <div class="col-2">
        <p><button type="submit" class="btn btn-primary btn-lg">Actualizar</button></p>
        </form>
        <p><a href="?pagina=clientes"><button class="btn btn-danger btn-lg">Regresar</button></a></p>
      </div>
      <div class="col-2">

      </div>
  </div>
</div>