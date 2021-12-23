<?php 

include_once 'config.php';
include_once 'conexion.php';
include_once 'usuario.php';
include_once 'RepositorioUsuario.php';
include_once 'ValidadorLogin.php';

Conexion::abrirConexion();

$validador = new ValidadorLogin($_POST['usuario_email'], $_POST['usuario_contrasena'], Conexion::obtenerConexion());


if ($validador->obtenerError() === "" && !is_null($validador->obtenerUsuario())) {
    header("Location: http://localhost:8012/Geoportal/contacts.html");
}
else{
	echo $validador->obtenerError();
}



?>