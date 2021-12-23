<?php 

class ValidadorLogin {

	private $usuario;
	private $error;

	public function __construct($email, $contrasena, $conexion){

		$this->error = "";

		if (!$this->variable_iniciada($email) || !$this->variable_iniciada($contrasena)) {
			$this->usuario = null;
			$this->error = "Datos ingresados no son correctos";
		}
		else{
			
			$this->usuario = RepositorioUsuario::obtenerUsuarioPorEmail($email, $conexion);

			echo $this->usuario->obtenerContrasena();
			echo "<br/>";
			echo $contrasena;

			if (is_null($this->usuario) || ($contrasena <> $this->usuario->obtenerContrasena())) {
				$this->error = "Datos Incorrectos";
				header("Location: http://localhost:8012/Geoportal/login.php");
			}

		}
	}
	private function variable_iniciada($variable){
		if (!isset($variable) && empty($variable)) {
			return false;
		}
		else{
			return true;
		}
	}

	public function obtenerUsuario(){
		return $this->usuario;
	}

	public function obtenerError(){
		return $this->error;
	}
}

?>