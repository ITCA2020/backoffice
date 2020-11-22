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
    <title>Riconchita | Administración</title>
    
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <label class="dropdown-item" onclick="mostrarAlmuerzos()">Almuerzos</label>
                    <label class="dropdown-item" onclick="mostrarAperitivos()">Aperitivos</label>
                    <label class="dropdown-item" onclick="mostrarBebidas()">Bebidas</label>
                    <label class="dropdown-item" onclick="mostrarDesayunos()">Desayunos</label>
                    <label class="dropdown-item" onclick="mostrarPostres()">Postres</label>
                </div>
            </li>
            <li class="nav-item">
                <a href="pedidos.php" class="nav-link" onclick="mostrarPedidos()">Pedidos</a>
            </li>
            <li class="nav-item">
                <a href="clientes.php" class="nav-link">Clientes</a>
            </li>
            <li class="nav-item">
                <label class="nav-link" onclick="mostrarInfo()">Información</label>
            </li>
        </ul>
        
    </div>
</nav>

    <main role="main" class="container">
 
       
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                        FORMULARIO PARA ALMUERZOS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="almuerzos">
            <h1>Registrar Almuerzos</h1><hr>
            
            <div class="" id="msj_almuerzo">
                
            </div>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del almuerzo" name="nombre_almuerzo" class="form-control">
                    <input type="number" placeholder="Precio" name="precio_almuerzo" class="form-control">
                    <input type="text" placeholder="Descripción" name="descripcion_almuerzo" class="form-control">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es" required name="img_almuerzo">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar" name="guardar_almuerzo">
                    
                </div>
            </form>
        </div>
        
        <?php

        if (isset($_POST["guardar_almuerzo"])) {
 
   
        $nombre_almuerzo = $_POST["nombre_almuerzo"];
        $precio_almuerzo = $_POST["precio_almuerzo"];
        $descripcion_almuerzo= $_POST["descripcion_almuerzo"];
        $img_almuerzo = addslashes(file_get_contents($_FILES["img_almuerzo"]["tmp_name"]));

        $registrar_almuerzo =  "INSERT INTO almuerzos (alm_nom,alm_precio,alm_desc,alm_img) VALUES ('$nombre_almuerzo', '$precio_almuerzo', '$descripcion_almuerzo', '$img_almuerzo')";
        $regist_almuerzo  = mysqli_query($conexion,$registrar_almuerzo);
 }

        ?>
        
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                        FORMULARIO PARA DESAYUNOS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="desayunos">
            <h1>Registrar Desayunos</h1><hr>
            
            <div class="" id="msj_desayuno"></div>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del desayuno" class="form-control" name="nombre_desayuno">
                    <input type="number" placeholder="Precio" class="form-control" name="precio_desayuno">
                    <input type="text" placeholder="Descripción" class="form-control" name="descripcion_desayuno">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es" required name="img_desayuno">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar" name="guardar_desayuno">
                    
                </div>
            </form>
        </div>
        
         <?php

        if (isset($_POST["guardar_desayuno"])) {
 
   
        $nombre_desayuno = $_POST["nombre_desayuno"];
        $precio_desayuno = $_POST["precio_desayuno"];
        $descripcion_desayuno = $_POST["descripcion_desayuno"];
        $img_desayuno = addslashes(file_get_contents($_FILES["img_desayuno"]["tmp_name"]));

        $registrar_desayuno =  "INSERT INTO desayunos (des_nom,des_precio,des_desc,des_img) VALUES ('$nombre_desayuno', '$precio_desayuno', '$descripcion_desayuno', '$img_desayuno')";
        $regist_desayuno = mysqli_query($conexion,$registrar_desayuno);
 }


        ?>
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA APERITIVOS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="aperitivos">
            <h1>Registrar Aperitivos</h1><hr>
            <div class="" id="msj_aperitivo"></div>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del aperitivo" class="form-control" name="nombre_aperitivo">
                    <input type="number" placeholder="Precio" class="form-control" name="precio_aperitivo">
                    <input type="text" placeholder="Descripción" class="form-control" name="descripcion_aperitivo">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es" required name="img_aperitivo">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar" name="guardar_aperitivo">
                    
                </div>
            </form>
        </div>
        
        <?php

        if (isset($_POST["guardar_aperitivo"])) {
 
   
        $nombre_aperitivo = $_POST["nombre_aperitivo"];
        $precio_aperitivo = $_POST["precio_aperitivo"];
        $descripcion_aperitivo = $_POST["descripcion_aperitivo"];
        $img_aperitivo = addslashes(file_get_contents($_FILES["img_aperitivo"]["tmp_name"]));

        $registrar_aperitivo =  "INSERT INTO aperitivos (ape_nom,ape_precio,ape_desc,ape_img) VALUES ('$nombre_aperitivo', '$precio_aperitivo', '$descripcion_aperitivo', '$img_aperitivo')";
        $regist_aperitivo = mysqli_query($conexion,$registrar_aperitivo);
 }

        ?>
          
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA POSTRES
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="postres">
            <h1>Registrar Postres</h1><hr>
            <div class="" id="msj_postre"></div>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del postre" class="form-control"  name="nombre_postres">
                    <input type="number" placeholder="Precio" class="form-control" name="precio_postres">
                    <input type="text" placeholder="Descripción" class="form-control" name="descripcion_postres">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es" required name="img_postres">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar" name="guardar_postres">
                    
                </div>
            </form>
        </div>
        
          <?php

        if (isset($_POST["guardar_postres"])) {
 
   
        $nombre_postres = $_POST["nombre_postres"];
        $precio_postres = $_POST["precio_postres"];
        $descripcion_postres = $_POST["descripcion_postres"];
        $img_postres = addslashes(file_get_contents($_FILES["img_postres"]["tmp_name"]));
        $registrar_postres =  "INSERT INTO postres (pos_nom,pos_precio,pos_desc,pos_img) VALUES ('$nombre_postres', '$precio_postres', '$descripcion_postres', '$img_postres')";
        $regist_postres= mysqli_query($conexion,$registrar_postres);
 }

        ?>
          
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA BEBIDAS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="bebidas">
            <h1>Registrar Bebidas</h1><hr>
            <div class="" id="msj_bebida"></div>
            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre de bebida" class="form-control" name="nombre_bebidas">
                    <input type="number" placeholder="Precio" class="form-control" name="precio_bebidas">
                    <input type="text" placeholder="Descripción" class="form-control" name="descricion_bebidas">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es" required name="img_bebidas">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar" name="guardar_bebidas">
                    
                </div>
            </form>
        </div>
        
          <?php

        if (isset($_POST["guardar_bebidas"])) {
 
   
        $nombre_bebidas = $_POST["nombre_bebidas"];
        $precio_bebidas = $_POST["precio_bebidas"];
        $descripcion_bebidas = $_POST["descripcion_bebidas"];
         $img_bebidas = addslashes(file_get_contents($_FILES["img_bebidas"]["tmp_name"]));
        $registrar_bebidas =  "INSERT INTO bebidas (beb_nom,beb_precio,beb_desc,beb_img) VALUES ('$nombre_bebidas', '$precio_bebidas', '$descripcion_bebidas', '$img_bebidas')";
        $regist_bebidas = mysqli_query($conexion,$registrar_bebidas);
 }

        ?>
          
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA INFORMACION
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="info">
            <h1>Información de Contacto</h1><hr>
            <div class="" id="msj_bebida"></div>
            
            <form action="index.php" method="post">
                <div class="form lead">
                    <input type="text" placeholder="Número de Whatsapp" class="form-control" name="wasap_info">
                    <input type="number" placeholder="Número de Teléfono" class="form-control" name="numero_info">
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Guardar" name="guardar_info">
                    
                </div>
            </form>
        </div>

          <?php

        if (isset($_POST["guardar_info"])) {
 
   
        $wasap_info = $_POST["wasap_info"];
        $numero_info = $_POST["numero_info"];
        $registrar_info =  "INSERT INTO info (wsp,tel) VALUES ('$wasap_info', '$numero_info')";
        $regist_info = mysqli_query($conexion,$registrar_info);
 }

        ?>

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