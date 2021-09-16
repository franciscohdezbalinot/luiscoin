<?php
  function ctrLogin(){
    if(isset($_POST['email'])){

      if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){
      // if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) &&
      //     preg_match('/^[a-zA-Z0-9]+$/', $_POST["pass"])){

          // $encript = crypt($_POST['pass'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
        $encript = crypt($_POST['pass'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

          
          $item = "email";
          $value = $_POST['email'];

          $answer = mdlGiveUser($item,$value);

          if ($answer) {

            if($answer["email"] == $_POST["email"] && $answer["pass"] == $encript){

              $_SESSION["validarSesionBackend"] = "ok";
              $_SESSION["public_key"] = $respuesta["public_key"];
              $_SESSION["private_key"] = $respuesta["private_key"];
              $_SESSION["email"] = $respuesta["email"];
              $_SESSION["nick"] = $respuesta["nick"];
              $_SESSION["pass"] = $respuesta["pass"];
              $_SESSION["telf"] = $respuesta["telf"];
              $_SESSION["name"] = $respuesta["name"];
              $_SESSION["last_name"] = $respuesta["last_name"];
              $_SESSION["age"] = $respuesta["age"];

              echo '<script>

                window.location = "profile";
  
              </script>';
            }

          }else{
            var_dump($answer);
          }
         

       

      }
    }
  }