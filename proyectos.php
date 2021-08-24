<?php 

  $pg = "proyectos";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontaweson -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap%22
        rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body id="proyectos">
    <?php include_once("header.php"); ?>
    <main class="container">
      <div class="row">
          <div class="col-12 py-5">
              <h1>Proyectos</h1>
          </div>
          <div class="row">
              <div class="col-12 col-sm-12">
                <p> Los siguientes son algunos de los trabajos que he realizado:</p>
              </div>              
          </div>
          <div class="row bloque">
            <div class="col-12 col-sm-4 p-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="Imagenes/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                       <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p> 
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="#">Código fuente</a>
                        </div>
                    </div>
                </div>              
              </div>   
          <div class="col-12 col-sm-4 p-4">
            <div class="row card">
                <div class="col-12 p-0">
                    <img src="Imagenes/abmventas.png" alt="" class="img-fluid">
                </div>
                <div class="col-12 color-gradiente py-3">
                    <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                </div>
                <div class="col-12 py-3">
                    <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                </div>
                <div class="row py-5">
                    <div class="col-6">
                        <a href="#" class="btn btn-rojo" target="_blank">Ver online</a>
                    </div>
                    <div class="col-6 link-rojo text-center">
                        <a href="#">Código fuente</a>
                    </div>
                </div>
            </div>              
          </div>  
          <div class="col-12 col-sm-4 p-4">
            <div class="row card">
                <div class="col-12 p-0">
                    <img src="Imagenes/proyecto-integrador.png" alt="" class="img-fluid">
                </div>
                <div class="col-12 color-gradiente py-3">
                    <h2>PROYECTO INTEGRADOR</h2>
                </div>
                <div class="col-12 py-3">
                    <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                </div>
                <div class="row py-5">
                    <div class="col-6">
                        <a href="#" class="btn btn-rojo" target="_blank">Ver online</a>
                    </div>
                    <div class="col-6 link-rojo text-center">
                        <a href="#">Código fuente</a>
                    </div>
                </div>
            </div>              
         </div>       
      </div>
    </main>
    <?php include_once("footer.php"); ?>    
</body>
</html>
