<?php
  function ctrLogin(){
    if(isset($_POST['email'])){

      if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["pass"])){

          $encript = crypt($_POST['pass'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
          
          $item = "email";
          $value = $_POST['email'];

          $answer = mdlGiveUser($item,$value);



      }
    }
  }