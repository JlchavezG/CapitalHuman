<?php
$Server = "localhost";
$usuario = "root";
$bd = "Human";
$password = "";
$conecta = mysqli_connect($Server,$usuario,$password,$bd);
if($conecta->connect_error){
  die('Error al conectar la base de datos'.$conecta->connect_error);
}
 ?>
