<?php
  $servidor="localhost";
  $usuario="root";
  $password="";
  $bd="dbdocente";


  $conexion= new mysqli($servidor,$usuario,$password,$bd);
  if ($conexion->connect_error) {
    die("Conexion fallida: ".$conexion->connect_error);
  }
  //echo "Conexion exitosa";
 ?>
