
<div>
  <div class="row">
      <p>
  </div>
  <div class="row">
      <div class="col-3">
            <h3>Agregar Tipo Mascota</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-8">
        <form method='POST' action='services/mascota/addTipoMct.php'>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tipo_mascota" class="form-label">Tipo de mascota</label>
            <input type="text" class="form-control" name="tipo_mascota" id="tipo_mascota" aria-describedby="nameHelp" required>
            <div id="nameHelp" class="form-text">Escribe el nombre del tipo de mascota.</div>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="tipoHelp" required>
            <div id="tipoHelp" class="form-text">Describe el tipo de mascota.</div>
          </div>
        <p>
      </div>
      <div class="col-2">
        <p><button type="submit" class="btn btn-primary btn-lg">Guardar</button></p>
        </form>
        <p><a href="?pagina=mascotas"><button class="btn btn-danger btn-lg">Regresar</button></a></p>
      </div>
      <div class="col-2">

      </div>
  </div>
</div>

