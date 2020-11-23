<?php
session_start();

$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$basededatos="rinconchita";
$conexion = mysqli_connect($servidor,$usuario,""); 
$db = mysqli_select_db($conexion,$basededatos);

$id_pedido =  $_GET["id_pedido"];

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	<title>modificar pedido</title>

	 <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">

</head>
<body>
	<a href="pedidos.php"> volver a pedidos </a>
	<br><br>
 <main role="main" class="container">
 	<center>
            <h1>Modificar Pedido</h1><hr>
            
            <div class="" id="msj_almuerzo">
                
            </div>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form lead">
                    <input type="text" placeholder="ID USUARIO = <?php echo $id_pedido; ?>" class="form-control" readonly >

                    
                    <input type="text" placeholder="id_user" name="id_user" class="form-control" readonly>

                    <input type="date" placeholder="fecha" name="fecha" class="form-control"  >

                    <input type="time" placeholder="hora" name="hora" class="form-control"  >

                    <input type="text" placeholder="direccion" name="user_dir" class="form-control"  >

                    <input type="text" placeholder="producto" name="producto" class="form-control"  >

                    <input type="number" placeholder="cantitad" name="cant" class="form-control"  >

                    <input type="number" placeholder="monto" name="cant" class="form-control"  >

                    <input type="text" placeholder="estado" name="estado" class="form-control"  >



                   <hr>
                    <input type="submit" class="btn btn-primary" value="Modificar" name="actualizar">
                    
                </div>
            </form>
            <?php

             if (isset($_POST['actualizar'])) {
             	$id_user = $_POST['id_user'];
             	$fecha = $_POST['fecha'];
             	$hora = $_POST['hora'];
             	$user_dir = $_POST['user_dir'];
             	$producto = $_POST['producto'];
                $cant = $_POST['cant'];
                $estado = $_POST['estado'];
               

                $sentencia = "UPDATE pedidos SET id_user '".$id_user."', fecha = '".$fecha."', hora = '".$hora."', user_dir = '".$user_dir."', producto = '".$producto."', cant = '".$cant."', estado = '".$estado."' WHERE id_user = '".$id_pedido."' ";
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