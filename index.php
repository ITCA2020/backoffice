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
            
            <form action="">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del almuerzo" class="form-control">
                    <input type="number" placeholder="Precio" class="form-control">
                    <input type="text" placeholder="Descripción" class="form-control">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    
                </div>
            </form>
        </div>
        
        
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                        FORMULARIO PARA DESAYUNOS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="desayunos">
            <h1>Registrar Desayunos</h1><hr>
            
            <div class="" id="msj_desayuno"></div>
            
            <form action="">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del desayuno" class="form-control">
                    <input type="number" placeholder="Precio" class="form-control">
                    <input type="text" placeholder="Descripción" class="form-control">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    
                </div>
            </form>
        </div>
        
        
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA APERITIVOS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="aperitivos">
            <h1>Registrar Aperitivos</h1><hr>
            <div class="" id="msj_aperitivo"></div>
            
            <form action="">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del aperitivo" class="form-control">
                    <input type="number" placeholder="Precio" class="form-control">
                    <input type="text" placeholder="Descripción" class="form-control">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    
                </div>
            </form>
        </div>
        
          
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA POSTRES
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="postres">
            <h1>Registrar Postres</h1><hr>
            <div class="" id="msj_postre"></div>
            
            <form action="">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre del postre" class="form-control">
                    <input type="number" placeholder="Precio" class="form-control">
                    <input type="text" placeholder="Descripción" class="form-control">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    
                </div>
            </form>
        </div>
        
        
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA BEBIDAS
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="bebidas">
            <h1>Registrar Bebidas</h1><hr>
            <div class="" id="msj_bebida"></div>
            
            <form action="">
                <div class="form lead">
                    <input type="text" placeholder="ID" class="form-control" readonly>
                    <input type="text" placeholder="Nombre de bebida" class="form-control">
                    <input type="number" placeholder="Precio" class="form-control">
                    <input type="text" placeholder="Descripción" class="form-control">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label> 
                    </div><hr>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    
                </div>
            </form>
        </div>
        
        
        <!--
        *    *    *    *    *    *    *    *    *    *    *    *
                       FORMULARIO PARA INFORMACION
        *    *    *    *    *    *    *    *    *    *    *    *
        -->
       
        <div class="text-center mt-5 pt-5 contenedor_principal" id="info">
            <h1>Información de Contacto</h1><hr>
            <div class="" id="msj_bebida"></div>
            
            <form action="">
                <div class="form lead">
                    <input type="text" placeholder="Número de Whatsapp" class="form-control">
                    <input type="number" placeholder="Número de Teléfono" class="form-control">
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    
                </div>
            </form>
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