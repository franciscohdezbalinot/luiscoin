<?php
session_start();

$url = ctrRuta();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


	<!-- CSS librerias -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" media="screen">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" media="screen">

	<!-- CSS Propio -->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/myCSS.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/login.css" media="screen">

  <!-- Plugin y librerias -->
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script defer src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
	<script defer src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' integrity='sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI' crossorigin='anonymous'></script>

  <!-- Js propio -->
	<script defer type='text/javascript' src='<?php echo $url; ?>views/js/app.js'></script>

</head>
<body>
  <?php
    if(isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok"){

      // ==============
      // Incluir contenido
      //===============
      if(isset($_GET["ruta"])){
        if($_GET["ruta"] == "profile"  ||
        $_GET["ruta"] == "login"){
        
          include "modules/".$_GET["ruta"].".php";

        }else{
          include "modules/error404.php";
        }

      }else{
        include "modules/profile.php";
      }

      // ==============
      // Incluir Footer
      //===============
      include "modules/footer.php";

      echo "</div>
        </div>";

    }else{

      // ==============
      // Incluir login
      //===============
      include "modules/login.php";
      // echo "No tienes sesión iniciada";
    }	
  ?>
</body>
</html>