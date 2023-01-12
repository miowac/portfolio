<?php
include 'conexion.php';
session_start();

$nombre = '';
$imagen = '';
$descripcion = '';
$_SESSION['id_proyecto'] = 0;

if($_POST){#si hay envio de datos, los inserto en la base de datos  
    $id=$_POST['modificar'];
    $nombre_proyecto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $nombre_imagen = $_POST['imagen'];
    #nombre de la imagen
    
    $imagen = $_FILES['archivo']['name'];
    $size = $_FILES['archivo']['size'];
    #tenemos que guardar la imagen en una carpeta 
    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    #creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
    if($id==0){
        $fecha = new DateTime();
        $imagen= $fecha->getTimestamp()."_".$imagen;
        move_uploaded_file($imagen_temporal,"../assets/imagenes/".$imagen);
    }else{
        
        if($size>0) {
            $fecha = new DateTime();
            $imagen= $fecha->getTimestamp()."_".$imagen;
            move_uploaded_file($imagen_temporal,"../assets/imagenes/".$imagen);
        }else{
            $imagen=$nombre_imagen;
        } 
        
    }

     
      
    #creo una instancia(objeto) de la clase de conexion
    $conexion = new conexion();
    if($id==0){
        $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre_proyecto' , '$imagen', '$descripcion')";
        $id_proyecto = $conexion->ejecutar($sql);
    }else{
        $sql = "UPDATE `proyectos` SET `nombre` = '$nombre_proyecto' , `imagen` = '$imagen', `descripcion` = '$descripcion' WHERE `proyectos`.`id` = '$id';";
        $id_proyecto = $conexion->ejecutar($sql);
    }
    
     #para que no intente borrar muchas veces
     header("Location:galeria.php");
     die();

 }
 #si nos envian por url, get 
 if($_GET){
    #ademas de borrar de la base , tenemos que borrar la foto de la carpeta imagenes
    if(isset($_GET['borrar'])){
        $id = $_GET['borrar'];
        $conexion = new conexion();

        #recuperamos la imagen de la base antes de borrar 
        $imagen = $conexion->consultar("select imagen FROM  `proyectos` where id=".$id);
        #la borramos de la carpeta 
        unlink("../assets/imagenes/".$imagen[0]['imagen']);

        #borramos el registro de la base 
        $sql ="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id; 
        $id_proyecto = $conexion->ejecutar($sql);
         #para que no intente borrar muchas veces
         header("Location:galeria.php");
         die();
    }

    if(isset($_GET['modificar'])){
        $id = $_GET['modificar'];
        // header("Location:modificar.php?modificar=".$id);
        $_SESSION['id_proyecto'] = $id;
        #vamos a consultar para llenar la tabla 
        $conexion = new conexion();
        $proyecto= $conexion->consultar("SELECT * FROM `proyectos` where id=".$id);
        $nombre=$proyecto[0]['nombre'];
        $imagen=$proyecto[0]['imagen'];
        $descripcion=$proyecto[0]['descripcion'];
        // die();
    }
 } 
  #vamos a consultar para llenar la tabla 
  $conexion = new conexion();
  $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");

  include 'header.php'; 
?> 

<br>
<!--ya tenemos un container en el header que cierra en el footer-->

    <div class="row d-flex justify-content-center mb-5">
        <div class="col-md-10 col-sm-12">
            <div class="card" style="background-color:#CDB3A6;">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <!--para recepcionar archivos uso enctype-->
                    <form action="galeria.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="modificar" id="modificar" value="<?php echo $_SESSION['id_proyecto'];?>">
                        <div>
                            <label for="nombre">Nombre del Proyecto</label>
                            <input required class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>">
                        </div>
                    
                        <div>
                            <label for="archivo">Imagen del Proyecto</label>
                            <?php if ($_SESSION['id_proyecto'] >0){?>
                                <input class="form-control" type="file" name ="archivo" id="archivo">
                            <?php }else{?>
                                <input required class="form-control" type="file" name ="archivo" id="archivo">
                            <?php }?>
                            
                            <input type="hidden" name="imagen" id="imagen" value="<?php echo $imagen;?>">
                        </div>
                        <br>
                        <div>
                            <label for="descripcion">Indique Descripción del Proyecto</label>
                            <textarea required class="form-control" name="descripcion" id="descripcion" cols="30" rows="4"><?php echo $descripcion;?></textarea>
                        </div>
                        <div>
                        <br>
                        <?php if ($_SESSION['id_proyecto'] >0){?>
                            <input class="btn btn-warning" type="submit" value="Modificar Proyecto">
                        <?php }else{?>
                            <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                        <?php }?>
                        </div>
                
                    </form>
                </div> <!--cierra el body-->
    
            </div><!--cierra el card-->
            
        </div><!--cierra el col-->
    </div><!--cierra el row-->
    <div style="background-color:#CDB3A6;">
    
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-md-10 col-sm-6">
            <h2 class="card-title text-dark card__mobile">Listado de proyectos ingresados: </h2>
                <table class="table tabla__galeria" style="background-color:#CDB3A6;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Eliminar</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php #leemos proyectos 1 por 1
                        foreach($proyectos as $proyecto){ ?>
                    
                        <tr >
                            <!--<td scope="row"><?php #echo $proyecto['id'];?></td> -->
                            <td><?php echo $proyecto['nombre'];?></td>
                            <td> <img width="200" src="../assets/imagenes/<?php echo $proyecto['imagen'];?>" alt="">  </td>
                            <td class="texto"><?php echo $proyecto['descripcion'];?></td>
                            <td><a name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'];?>">Eliminar</a></td>
                            <td><a name="modificar" id="modificar" class="btn btn-warning" href="?modificar=<?php echo $proyecto['id'];?>">Modificar</a></td>
                        </tr>

                        <?php #cerramos la llave del foreach
                        } ?>
                    </tbody>
                </table>
                
            </div><!--cierra el col-->  
            
        </div>
    </div>
   
<?php include 'footer.php'; ?>