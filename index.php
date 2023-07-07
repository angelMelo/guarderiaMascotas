<!doctype html>

<html lang="es" data-bs-theme="dark">

  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guarderia Mascota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    <?php

    @$recibe_pagina=$_GET['pagina'];

    ?>
  
  </head>
  
  <body>

  <header>

  <nav class="navbar navbar-expand-lg" style="background-color: #1b14ff;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="?pagina=inicio">Bienvenido</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="?pagina=inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=clientes">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=mascotas">Mascotas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servicios">Servicios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  </header>

    <div class="container">

      <?php

        switch ($recibe_pagina){

          case "clientes":

          include ("views/cliente/clientes.php");

          break;

          case "agregaCliente":

          include ("views/cliente/addCliente.php");

          break;

          case "actualizarCliente":

          include ("views/cliente/actualizarCliente.php");
  
          break;

          case "consultarCliente":

          include ("views/cliente/consultarCliente.php");
    
          break;

          case "mascotas":

          include ("views/mascota/mascotas.php");
  
          break;

          case "agregaMascota":

          include ("views/mascota/addMascota.php");
    
          break;

          case "actualizarMascota":

          include ("views/mascota/actualizarMascota.php");
      
          break;

          case "agregaTipoMascota":

          include ("views/tipo-mascota/addTipoMascota.php");
      
          break;

          case "servicios":

          include ("views/servicio/servicios.php");
    
          break;
  
          case "servicioInactivo":
  
          include ("views/servicio/servicioInactivo.php");
      
          break;

          case "inicio":

          include ("views/default/home.php");
  
          break;
        
          default:

          include ("views/default/home.php");

        }

      ?> 

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
  </body>

  </html>
