<?php 
  $nivel='';
  include 'header.php';
?>

  <main>
   
    <section class="hero align-items-stretch">
      <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
        <img class="hero-imagen-desarrollador rounded-circle" src="./assets/imagenes/Irene.jpg"
          alt="Foto de Monica Irene Olivera">
        <h1>Hola, soy Monica Irene Olivera</h1>
        <h2>Desarrollo sitios web responsivo.</h2>
      </div>
    </section>
        
    <section class="section">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="./assets/imagenes/1.jpg" class="d-block w-30" alt="imagen codigo programacion">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./assets/imagenes/2.jpg" class="d-block w-30" alt="imagen codigo">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./assets/imagenes/3.jpg" class="d-block w-30" alt="imagen notebook">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>              
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./assets/imagenes/4.jpg" class="d-block w-30" alt="imagen notebook">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    
    <section class="experiencia seccion-clara">
      <div class="container text-center">
        <div class="row">
         
          <div class="columna col-12 col-md-4">
            <i class="bi bi-code-slash"></i>
            <p class="experiencia-titulo">Desarrollo Web</p>
            <p>Diseño Responsive, se adapta a ordenadores, celulares y tablets.</p>
            <div class="badges-contenedor">
              <span class="badge text-bg-secondary">HTML</span>
              <span class="badge text-bg-secondary">CSS</span>
              <span class="badge text-bg-secondary">JavaScript</span>
              <span class="badge text-bg-secondary">MySql</span>
            </div>
          </div>
         
          <div class="columna col-12 col-md-4">
            <i class="bi bi-laptop"></i>
            <p class="experiencia-titulo">Proyectos</p>
            <p>Estos son mis proyectos recientes realizados con. </p>
            <div class="badges-contenedor">
              <span class="badge text-bg-secondary">Html y Css</span>
              <span class="badge text-bg-secondary">Java Script y Php</span>
              <span class="badge text-bg-secondary">Bootstrap y MySql</span>
            </div>
          </div>
         
          <div class="columna col-12 col-md-4">
            <i class="bi bi-laptop"></i>
            <p class="experiencia-titulo">Certificados</p>
            <p>Poseo certificaciones en Php Full Stack y Habilidades blandas</p>
            <div class="badges-contenedor">
              <span class="badge text-bg-secondary">Codo a Codo</span>
              <span class="badge text-bg-secondary">Accenture</span>
              
            </div>
          </div>
        </div>
      </div>
    </section>

      
  </main>
  
  <?php
include 'footer.php';
?>