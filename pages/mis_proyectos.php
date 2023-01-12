<?php
  $nivel='../';
  include $nivel.'admin/conexion.php';
  $conexion = new conexion();
  $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
  include $nivel.'header.php';
?>

  <main>

    <section id="proyectos" class="proyectos-recientes seccion-clara d-flex flex-column">

      <div>
        <h2 class="section seccion-titulo texto-negro">Mis proyectos recientes</h2>
      </div>
      
      <div>
        <h3 class="seccion-descripcion">Estos son algunos proyectos que he creado recientemente...</h3>
      </div>
      
      <div class="container text-center proyectos-contenedor">
        <div class="row">
          <?php 
           foreach($proyectos as $proyecto){ ?>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="<?php echo $nivel;?>assets/imagenes/<?php echo $proyecto['imagen'];?>" alt="<?php echo $proyecto['descripcion'];?>" class="img-fluid" title="<?php echo $proyecto['nombre'];?>">
              <div class="overlay">
                <p><?php echo $proyecto['descripcion'];?></p>
              </div>
            </div>
          </div>
          <?php 
         } ?>
         
        </div> 
      </div>
      
    </section>
  </main>

  <?php
  include $nivel.'footer.php';
  ?>