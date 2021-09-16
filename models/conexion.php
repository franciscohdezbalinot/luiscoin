<?php

  function connection(){
    try {

      $connection = new PDO(
          'mysql:host=localhost;dbname=luiscoin',
          'root',
          '',
          array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
      );

      } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $connection;
  }