<?php
include_once 'config.php';
include_once 'conexion.php';
include_once 'usuario.php';
include_once 'RepositorioUsuario.php';
include_once 'ValidarRegistro.php';

Conexion::abrirConexion();
   
$validador = new ValidarRegistro($_POST['usuario_nombre'],$_POST['usuario_apellido'],$_POST['usuario_email'],$_POST['usuario_contrasena'], Conexion::obtenerConexion());

if ($validador->registroValido()){
    $usuario = new Usuario('', $validador->obtenerNombre(), $validador->obtenerApellido(),$validador->obtenerEmail(),$validador->obtenerContrasena());
    
    $insertar_usuario = RepositorioUsuario::insertarUsuario(Conexion::obtenerConexion(),$usuario);

    if($insertar_usuario){
        echo "insertado";
        header("Location: http://localhost:8012/Geoportal/prelogin.php");
    }
    else{
        echo "no insertado";
    }
}
 else{

    $error = array(
        'errorNombre'=>$validador->obtenerErrorNombre(),
        'errorApellido'=>$validador->obtenerErrorApellido(),
        'errorEmail'=>$validador->obtenerErrorEmail(),
        'errorContrasena'=>$validador->obtenerErrorContrasena(),
    );
    echo json_encode($error);
 }

 Conexion::cerrarConexion();
?>