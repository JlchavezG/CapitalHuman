<?php
// realizar las consultas para el dashboard
// consulta total de empresas
$Empresa = "SELECT * FROM Empresas ORDER BY Id_Empresa";
$Empresas = $conecta->query($Empresa);
$TEmpresas = $Empresas->num_rows;
// consulta total de Usuarios
$Usuario = "SELECT * FROM Usuarios ORDER BY Id_Usuarios";
$Usuarios = $conecta->query($Usuario);
$TUsuarios = $Usuarios->num_rows;

// consulta para el total de mujeres
$Mujer = "SELECT * FROM Usuarios WHERE Id_Genero = '1'";
$Mujeres = $conecta->query($Mujer);
$TMujeres = $Mujeres->num_rows;
// consulta para total de hombres
$Hombre = "SELECT * FROM Usuarios WHERE Id_Genero = '2'";
$Hombres = $conecta->query($Hombre);
$THombres = $Hombres->num_rows;
// consulta cruzada o inner join para obtener todos los datos de usuario
$Inner = "SELECT U.Id_Usuarios, U.Nombre, U.ApellidoP, U.ApellidoM, U.Id_Genero, U.Telefono, U.Email, U.Id_Empresa, U.Id_Tuser,
U.UserName, U.Password, U.Imagen, U.Estatus, U.Online, G.Id_Genero, G.NombreG, E.Id_Empresa, E.NombreEmp, T.Id_TUsuario, T.NombreT, S.Id_Estatus, S.EstatusNom FROM Usuarios AS U
INNER JOIN Genero AS G ON U.Id_Genero = G.Id_Genero INNER JOIN Empresas AS E ON U.Id_Empresa = E.Id_Empresa INNER JOIN TUsuario AS T ON U.Id_Tuser = T.Id_TUsuario INNER JOIN Estatus AS S ON U.Estatus = S.Id_Estatus WHERE UserName = '$usuario'";
$ejecuta = $conecta->query($Inner);
$datosPerfil = $ejecuta->fetch_assoc();
// verificar estatus
 ?>
