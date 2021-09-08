<?php

  function connection(){
    $connection = new mysqli('localhost', 'root', '', 'luiscoin');

    if ($connection->connect_errno) {
      printf("Conexión fallida: %s\n", $connection->connect_error);
      exit();
    }
    return $connection;
  }