<?php
session_start();

$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$basededatos="rinconchita";
$conexion = mysqli_connect($servidor,$usuario,""); 
$db = mysqli_select_db($conexion,$basededatos);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Riconchita | Registro de Pedidos</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Riconchita | Administración</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link" onclick="mostrarPedidos()">Volver a inicio</a>
            </li>
            <li class="nav-item">
                <a href="clientes.php" class="nav-link">Clientes</a>
            </li>
        </ul>
        
    </div>
</nav>

    <main role="main" class="container">
 
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                           REGISTRO DE PEDIDOS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="pedidos">
            <h1>Registro de Pedidos</h1>
            <div class="" id="msj_pedidos"></div><hr>
            
            <div class="form-inline">
                <input class="form-control" type="search" placeholder="Buscar.." aria-label="Buscar">
                <button class="btn btn-primary" type="buttom" id="btnBuscar" onclick="">Buscar</button>
            </div>
            
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>PEDIDO</th>
                        <th>FECHA</th>
                        <th>HORA</th>
                        <th>CLIENTE</th>
                        <th>MONTO</th>
                        <th>ESTADO</th>
                        <th>acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00000</td>
                        <td>28 de dic de 2020</td>
                        <td>11:30 AM</td>
                        <td>Eliu Salazar</td>
                        <td>$ 25.00</td>
                        <td>recibido</td>
                        <td>
                           <div class="btn-group">
                                <button type="button" class="btn btn-success">Modificar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                    <?php

                    $consultapedidos = 'SELECT * from pedidos ';
                    $resultadohisto = mysqli_query($conexion,$consultapedidos) ;

                    while ($filas=mysqli_fetch_array($resultadohisto)) {
                       
                       echo "<tr>";
                       echo "<td>"; echo $filas['id_pedido']; echo "</td>";
                       echo "<td>"; echo $filas['fecha']; echo "</td>";
                       echo "<td>"; echo $filas['hora']; echo "</td>";
                       echo "<td>"; echo $filas['id_user']; echo "</td>";
                       echo "<td>"; echo "$filas['pedidos']"; echo "</td>";
                       echo "<td>"; echo $filas['estado']; echo "</td>";
                       echo "<td>                   
                            <div class='btn-group'>
                                   <a href = 'modificar_pedidos.php?id_pedido=".$filas['id_pedido']."'>
                                   <button type='button' class='btn btn-success' name='mod' >Modificar</button>
                                   </a>
                                   <a href = 'eliminar_pedidos.php?id_pedido=".$filas['id_pedido']."'>
                                <button type='button' class='btn btn-danger' name='eliminar'>Eliminar</button>
                               </a>
                            </div>

                       </td>";
                       echo "</tr>";
                    }

                    ?>

                </tbody>
            </table>
        </div>

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