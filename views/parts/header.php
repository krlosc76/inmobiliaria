<?php
ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema inmobiliario</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="imgs/logo.svg" type="image/x-icon">
    <!-- Archivos css -->
    <link href="<?=base_url?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url?>assets/public/css/style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?=base_url?>assets/public/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?=base_url?>assets/public/fontawesome/css/fontawesome.min.css">
    
</head>
<body>
  <?php Utils::registerAlert();?>
  <?php Utils::loginAlert(); ?> 
  

  
        <nav class="navbar navbar-expand-lg barra-navegacion px-3 px-lg-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="<?=base_url?>assets/public/imgs/logo.svg" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0" >
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="<?=base_url?>/vista/index"><i class="fa-solid fa-house"></i> Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url?>/vista/listado"><i class="fa-solid fa-building" ></i> propiedades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i> Contacto</a>
              </li>
              <?php if(!isset($_SESSION['identity'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user"></i> Login</a>
              </li>
              <?php endif; ?>
              <!-- Modal -->
              <div class="modal fade login" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action="<?=base_url?>usuario/login" method="post">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Log in</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                      </div>
                      <div id="passwordHelpBlock" class="form-text">
                        ¿Olvidaste la contraseña?
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button type="submit" class="boton-login">Iniciar sesión</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <?php if(!isset($_SESSION['identity'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="#"data-bs-toggle="modal" data-bs-target="#exampleModal-R"><i class="fa-solid fa-right-to-bracket"></i> Registro</a>
              </li>
              <?php endif; ?>
              <!-- Modal -->
              <div class="modal fade login" id="exampleModal-R" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Registro</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?=base_url?>usuario/save" method="post">
                    <div class="modal-body">
                      <div class="mb-3">
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="nombre">
                      </div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="tel" class="form-control" name="telefono" placeholder="telefono">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button type="submit" class="boton-login">registrarse</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <?php if(isset($_SESSION['identity'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url?>/admin/index"><i class="fa-solid fa-gauge"></i> Dashboard</a>
              </li>
              <?php endif; ?>
              <?php if(isset($_SESSION['identity'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url?>/usuario/logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
    </nav>

 