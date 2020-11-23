<?php
session_start();

$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$basededatos="rinconchita";
$conexion = mysqli_connect($servidor,$usuario,""); 
$db = mysqli_select_db($conexion,$basededatos);


$id_user =  $_GET["id_user"];

$id = $id_user;
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	<title>modificar clientes</title>

	 <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">

</head>
<body>
	<a href="clientes.php"> volver a clientes  </a>
	<br><br>
 <main role="main" class="container">
 	<center>
            <h1>Modificar Cliente</h1><hr>
            
            <div class="" id="msj_almuerzo">
                
            </div>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form lead">
                    <input type="text" placeholder="ID USUARIO = <?php echo $id_user; ?>" class="form-control" readonly >
                    <input type="text" placeholder="Nombre del usuario" name="user_nom" class="form-control" 
                    >
                    <input type="text" placeholder="contraseña" name="user_pass" class="form-control" >

                    <input type="text" placeholder="Correo" name="user_correo" class="form-control"  >

                    <input type="text" placeholder="Direccion" name="user_dir" class="form-control"  >

                    <input type="number" placeholder="telefono" name="user_tel" class="form-control"  >
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es"  name="user_img" >
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Modificar" name="actualizar">
                    
                </div>
            </form>
            <?php

             if (isset($_POST['actualizar'])) {
             	$user_nom = $_POST['user_nom'];
             	$user_pass = $_POST['user_pass'];
             	$user_correo = $_POST['user_correo'];
             	$user_dir = $_POST['user_dir'];
             	$user_tel = $_POST['user_tel'];
                $user_img = addslashes(file_get_contents($_FILES["user_img"]["tmp_name"]));

                $sentencia = "UPDATE usuarios SET user_nom= '".$user_nom."', user_pass = '".$user_pass."', user_correo = '".$user_correo."', user_dir = '".$user_dir."', user_tel = '".$user_tel."', user_img = '".$user_img."' WHERE id_user = '".$id_user."' ";
                $consulta = mysqli_query($conexion,$sentencia);
             }

            ?>
        
</center>
</main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="script.js"></script>
</body>
</html>