<?php

    require "model/GuarderiaModel.php";
    require "controller/Cliente.php";
    $cliente = new Cliente();
    $id_cliente = $_POST['id_cliente'];
    $info = $cliente->getClienteById($id_cliente);
    $nombre = $info[0]['nombre'];
    $apellido_paterno = $info[0]['apellido_paterno'];
    $apellido_materno = $info[0]['apellido_materno'];
    $direccion = $info[0]['direccion'];
    $ciudad = $info[0]['ciudad'];
    $codigo_postal = $info[0]['codigo_postal'];
    $estado = $info[0]['estado'];

?>

<div>
  <div class="row">
      <p>
  </div>
  <div class="row">
      <div class="col-3">
            <h3>Actualizar Cliente</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-8">
        <form method='POST' action='services/cliente/updCl.php'>
          <div>
            <input type="hidden" class="form-control" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" value="<?php echo $apellido_paterno;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="apellido_materno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" value="<?php echo $apellido_materno;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $direccion;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?php echo $ciudad;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="codigo_postal" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" value="<?php echo $codigo_postal;?>" required>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $estado;?>" required>
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
