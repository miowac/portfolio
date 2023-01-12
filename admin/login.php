<?php 
    $nivel='';
    include 'conexion.php';
    ob_start(); 
    session_start();
    $error='';

    if ($_POST){
       $conexion = new conexion();
        $_SESSION['existe_usuario']=false;
        $usuario = $conexion->consultar("select * FROM  `usuarios` where usuario='".$_POST['usuario']."' and clave='".$_POST['clave']."'" );

        if(count($usuario)>0){
          $_SESSION['nombre_usuario']=$usuario[0]['nombre']." ".$usuario[0]['apellido'];
          $_SESSION['existe_usuario']=true;
          header("location:index.php");
          die();
        }  else{
            $error="Usuario y/o Contraseña incorrecta";
       
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Login</title>
    <link rel="stylesheet" href="<?php echo $nivel;?>../ccs/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $nivel;?>../ccs/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@100&display=swap" rel="stylesheet">   
</head>
<body>
    <div class="container">
        <div class="contact-box">
            
            <div class="left"></div>
            
            <div class="right">
                <h2>Crud PortFolio  <a href="../index.php">MIO</a></h2>
                <form action="login.php" method="post">
                    <input type="text" name="usuario" id="usuario" class="btn" placeholder="Usuario" required>
                    <input type="password" name="clave" id="clave" class="btn" placeholder="Password" required>

                    <?php if($error!=''){?>
                     <h5 class="alert alert-danger"><?php echo $error;?></h5>
                    <?php }?>
                    <input type="submit" name="enviar" value="Enviar" class="btn">
                  
                </form>
        </div>
    </div>
    
</body>
</html>