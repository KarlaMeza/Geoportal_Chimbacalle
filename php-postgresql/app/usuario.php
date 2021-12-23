<?php 

class Usuario{

    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $contrasena;

    public function __construct ($id, $nombre, $apellido, $email, $contrasena){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->contrasena = $contrasena;
    }

    public function obtenerId(){
        return $this->id;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }

    public function obtenerApellido(){
        return $this->apellido;
    }

    public function obtenerEmail(){
        return $this->email;
    }

    public function obtenerContrasena(){
        return $this->contrasena;
    }
}

?>