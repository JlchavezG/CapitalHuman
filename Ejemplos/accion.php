<?php

$usuario = "Sistemas";
$password = "Developers";
$user = $_POST['usuario'];
$pass = $_POST['password'];
if($user == "" || $pass == ""){
  echo "nunguno de los campos";
}
else{
if($usuario == $user && $password == $pass){
  echo "Bienvenido: ".$user;
}
else{
  echo "No eres un usuario registrate";
}
}
?>
