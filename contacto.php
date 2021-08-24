<?php 

  $pg = "contactos";
  
?>
<!DOCTYPE html>
<html lang="es">
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

    <title>Conctacto</title>
</head>
<body id="contactos">
    <?php include_once("header.php"); ?>
    <main class="container">
      <div class="row">
          <div class="col-12 py-5">
              <h1>Contacto</h1>
          </div>
          <div class="row">
              <div class="col-12 col-sm-6">
                <p> Te invito a que te contactes enviandomé un mensaje o bien por whatsapp</p>
              </div>
              <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3">
                    </div>
                    <div>
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control mb-3">
                    </div>
                    <div>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control mb-3">
                    </div>
                    <div>
                        <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mt-4">ENVIAR</button>
                    </div>
                </form>
              </div>
          </div>
      </div>
    </main>
    <?php include_once("footer.php"); ?>    
</body>
</html>