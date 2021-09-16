<?php

  require_once "conexion.php";

  function mdlGiveUser($item,$value){
    
    $connection =  connection();

    if($item != null){

      $consultShowUser = $connection->prepare("SELECT * FROM user WHERE $item = ?");

      $consultShowUser->setFetchMode(PDO::FETCH_ASSOC);

      $consultShowUser->bindParam(1, $value);

      $consultShowUser->execute();

      $numFilas=$consultShowUser->rowCount();

      if($numFilas>0){

        $fila=$consultShowUser->fetch();

        return $fila;

      }else{
        return false;
      }
    }
  }