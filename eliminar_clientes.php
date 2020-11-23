<?php
session_start();

$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$basededatos="rinconchita";
$conexion = mysqli_connect($servidor,$usuario,""); 
$db = mysqli_select_db($conexion,$basededatos);

 $id_user = $_GET["id_user"];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	<title>eliminar clientes</title>

	<!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
 <br><br>
  <main role="main" class="container">
 
 <center>

<?php
 if (isset($_POST['eliminar_cliente'])) {
 	               
                    $eliminarcli =  "DELETE FROM usuarios WHERE id_user = '$id_user'";
                    $consultaeliminar = mysqli_query($conexion,$eliminarcli);

                 
                    echo "SE ELIMINO EL CLIENTE <br>";
                    echo "<a href='clientes.php'>VOLVER A CLIENTES </a><br>";
                  
 }
 
?>

 	DESEA ELIMINAR EL CLIENTE<br><br>
 	<div class='btn-group'>
 	<form method="post">
    <button type='submit' class='btn btn-success' name='eliminar_cliente' >Aceptar</button>
    </form>
     </div>          
    <div class='btn-group'> 
    <a href = 'clientes.php?'>
    <button type='button' class='btn btn-danger' name='eliminar'>Canselar</button>
    </a>
    </div>

 </center>
  </main><!-- /.container -->
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>