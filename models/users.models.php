<?php

  require_once "conexion.php";

  function mdlGiveUser($item,$value){
    
    $connection =  conecction();

    if($item != null){
      $consultShowUser = "SELECT nick, email, pass FROM user WHERE $item = ?";

      $result = $connection->prepare($consultShowUser);
      $result -> bind_param("s",$value);
      $result -> bind_result($nick,$email,$pass);
      $result -> execute();
      $result -> store_result();
      if(!$result){
        $error = $connection->error();
        var_dump($error);
      }else{

        $arrayFetch = fetch();
        
        return $arrayFetch;
      }
    }
  }