<?php 

  $pg = "inicio";

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
<body id="inicio">
    <?php include_once("header.php"); ?>
    <main class="container">
      <div class="row">
          <div class="col-12 mt-4 text-center div-cohete">
              <a href="proyectos.html"><img src="Imagenes/cohete.svg" class="cohete"></a>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
              <div class="input-home">
                  <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 text-center">
              <a href="proyectos.html" class="btn shadow">Conoce mis proyectos</a>
          </div>
      </div>
    </main>
    <?php include_once("footer.php"); ?>    
</body>
</html>