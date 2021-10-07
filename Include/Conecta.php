<?php
$Server = "localhost";
$usuario = "root";
$bd = "Hsoft";
$password = "";
$conecta = mysqli_connect($Server,$usuario,$password,$bd);
if(!$conecta){
  die('Error al conectar la base de datos'.$conecta->connect_error);
}
mysqli_close($conecta);
 ?>
