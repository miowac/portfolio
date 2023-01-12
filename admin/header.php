<?php
  $nivel='../';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Monica Irene Olivera">
  <meta name="description" content="Portfolio de desarrollo web de Monica Irene Olivera">
  <meta name="keywords" content="HTML, CSS, JavaScript, bootstrap,PHP">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monica Irene Olivera | Administracion de Portfolio</title>
  <link rel="shortcut icon" href="./favicon.ico">
  <link rel="stylesheet" href="<?php echo $nivel;?>ccs/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $nivel;?>ccs/estilos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@100&display=swap" rel="stylesheet">

</head>

<body>

  <header>
   
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
          <a class="navbar-brand" href="<?php echo $nivel;?>admin/index.php">
            <img src="<?php echo $nivel;?>assets/imagenes/Programador.png" width="50" alt="Logo de la página web">
          </a>
          
           <label class="nav-link active">Usuario: <?php echo  $_SESSION['nombre_usuario'];?></label>
           
          <ul class="navbar-nav d-flex justify-content-center align-items-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $nivel;?>admin/galeria.php">Ver Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $nivel;?>admin/galeria.php">Nuevo Proyecto</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo $nivel;?>admin/cerrar.php" >Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>