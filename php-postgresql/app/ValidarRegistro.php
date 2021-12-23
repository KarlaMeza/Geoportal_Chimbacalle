<?php 

include_once 'RepositorioUsuario.php';

class ValidarRegistro{

	private $nombre;
	private $apellido;
	private $email;
	private $contrasena;

	private $errorNombre;
	private $errorApellido;
	private $errorEmail;
	private $errorContrasena;


	public function __construct($nombre, $apellido, $email, $contrasena, $conexion){

		$this->nombre="";
		$this->apellido="";
		$this->email="";
		$this->contrasena="";

		$this->errorNombre = $this->validarNombre($nombre, $conexion);	
		$this->errorApellido = $this->validarApellido($apellido, $conexion);	
		$this->errorEmail = $this->validarEmail($email, $conexion);
		$this->errorContrasena = $this->validarContrasena($contrasena, $conexion);
	}

	private function variableIniciada($variable){
		if (isset($variable) && !empty($variable)){
			return true;
		}
		else{
			return false;
		}

	}

	private function validarNombre($nombre, $conexion){
		
		if(!$this->variableIniciada($nombre)){
			return "Ingrese un nombre de usuario por favor";
		}
		else{
			$this->nombre=$nombre;
		}

		if(strlen($nombre)<2){
			return "El nombre de usuario debe contener al menos 2 caracteres";
		}

		if(strlen($nombre)>20){
			return "El nombre de usuario no debe superar los 20 caracteres";
		}

		if(RepositorioUsuario::nombreExiste($conexion, $nombre)){
			return "El nombre ya está en uso, por favor ingrese otro nombre de usuario";
		}
		
		return "";
	}


	private function validarApellido($apellido, $conexion){
		
		if(!$this->variableIniciada($apellido)){
			return "Ingrese un nombre de usuario por favor";
		}
		else{
			$this->apellido=$apellido;
		}

		if(strlen($apellido)<2){
			return "El nombre de usuario debe contener al menos 2 caracteres";
		}

		if(strlen($apellido)>20){
			return "El nombre de usuario no debe superar los 20 caracteres";
		}
		
		return "";
	}


	private function validarEmail($email, $conexion){
        if(!$this->variableIniciada($email)){
			return "Ingrese su correo por favor";
		}
		else{
			$this->email=$email;
		}

        if(RepositorioUsuario::emailExiste($conexion, $email)){
			return "El email ya está en uso, por favor ingrese otro correo electrónico";
		}

		if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
            return "Ingrese un correo válido";
		}

		return "";
		
	}

	private function validarContrasena($contrasena, $conexion){
		
		if(!$this->variableIniciada($contrasena)){
			return "Ingrese un apellido de usuario por favor";
		}
		else{
			$this->contrasena=$contrasena;
		}

		return "";
	}

	//GETTERS VARIABLES
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

	//GETTERS ERRORES
	public function obtenerErrorNombre(){
		return $this->errorNombre;
	}

	public function obtenerErrorApellido(){
		return $this->errorEmail;
	}

	public function obtenerErrorEmail(){
		return $this->errorEmail;
	}

	public function obtenerErrorContrasena(){
		return $this->errorContrasena;
	}

	public function registroValido(){
		if($this->errorNombre==="" && $this->errorApellido==="" && $this->errorEmail==="" && $this->errorContrasena===""){
			return true;
		}
		else{
			return false;
		}
	}

}

?>