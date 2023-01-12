<?php
    include 'conexion.php';
    session_start(); 
    
    ob_start(); 
    set_error_handler("var_dump");

    if ($_SESSION['existe_usuario'] == ''){
        $valido = false;
    }else{
        $valido = true;
    }
    if ( $valido==false ){
        header("location:login.php");
        die();
    }

    $conexion = new conexion();
    $proyectos= $conexion->consultar("SELECT * FROM `proyectos`"); 
    
    include 'header.php';    
?>

<div class= "container::after p-5 bg-light">
   
    <div class="container::after">
        <h1 class="display-3">Administrador de Portfolio</h1>
        <p class="lead">Proyectos Cargados en base de datos</p>
        <hr class="my-2">
        <p class="lead" style="font-size:1.5rem;">Para poder acceder al portfolio, haga click <a href="<?php echo $nivel;?>index.php">aqui</a> <br><br>
         En Nuevo proyecto podra:  <br> Dar de alta un nuevo Proyecto <br> Dar de baja un Proyecto <br> Modificar un Proyecto <br>
        Cualquier duda <a href="mailto:miowac2003@gmail.com">Click para enviar email</a></p>
       
    </div>
</div>

<div class ="container" style="background-color:#CDB3A6;">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php 
        foreach($proyectos as $proyecto){ ?>
            <div class="col">
                <div class="card border border-3 shadow">
                    <img class="card-img-top" style="object-fit:cover;" src="../assets/imagenes/<?php echo $proyecto['imagen'];?>" alt="" width="100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
                        <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php'; ?>