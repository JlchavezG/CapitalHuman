<?php
// recordar sesion
session_start();
//olvidar la sesion
session_unset();
// destruir la sesion
session_destroy();
header("location:../login.php");


?>
