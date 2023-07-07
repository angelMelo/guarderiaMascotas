
<div>
  <div class="row">
        <p>
  </div>
  <div class="row">
      <div class="col-3">
            <h3>Agregar Cliente</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-8">
        <form method='POST' action='services/cliente/addCl.php'>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nameHelp" required>
            <div id="nameHelp" class="form-text">Escribe nombre o nombres.</div>
          </div>
          <div class="mb-3">
            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" required>
          </div>
          <div class="mb-3">
            <label for="apellido_materno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" required>
          </div>
          <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="direccion" required>
          </div>
          <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" name="ciudad" id="ciudad" required>
          </div>
          <div class="mb-3">
            <label for="codigo_postal" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" required>
          </div>
          <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" required>
          </div>
        <p>
      </div>
      <div class="col-2">
        <p><button type="submit" class="btn btn-outline-primary btn-lg">Guardar</button></p>
        </form>
        <p><a href="?pagina=clientes"><button class="btn btn-outline-danger btn-lg">Regresar</button></a></p>
      </div>
      <div class="col-2">

      </div>
  </div>
</div>

