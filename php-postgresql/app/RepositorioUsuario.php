<?php 

class RepositorioUsuario {

	public static function insertarUsuario($conexion, $usuario){

		$usuarioInsertado = false;

		if (isset($conexion)){

			try{
				$sql = "INSERT INTO usuarios (usuario_nombre,usuario_apellido, usuario_email, usuario_contrasena) values (:nombre, :apellido, :email, :contrasena)";

				$sentencia = $conexion->prepare($sql);


				$nombre = $usuario->obtenerNombre();
				$apellido = $usuario->obtenerApellido();
				$email = $usuario->obtenerEmail();
				$contrasena = $usuario->obtenerContrasena();

				$sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
				$sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
				$sentencia->bindParam(':email', $email, PDO::PARAM_STR);
				$sentencia->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);

				$usuarioInsertado = $sentencia->execute();

                $usuarioInsertado = true;
			}
			catch(PDOException $e){
				print "ERROR". $e->getMessage();
			}
		}
		return $usuarioInsertado; //true o false
	}
    
	public static function obtenerUsuarioPorEmail($email, $conexion){

		$usuario = null;

		if (isset($conexion)) {
			# code...
			try {

				include_once 'usuario.php';

				$sql = "SELECT * FROM usuarios WHERE usuario_email = :email";
				
				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(':email', $email, PDO::PARAM_STR);
				$sentencia->execute();

				$resultado = $sentencia -> fetch();

				if (!empty($resultado)) {
					
					$usuario = new Usuario($resultado['usuario_id'], $resultado['usuario_nombre'], $resultado['usuario_apellido'], $resultado['usuario_email'], $resultado['usuario_contrasena']);
				}

			} catch (PDOException $e) {
				print "ERROR". $e -> getMessage();
				die();
			}
		}

		return $usuario;
	}
 
	public static function nombreExiste($conexion, $nombre){

		$nombreExiste = true;

		if(isset($conexion)){

			try{

				$sql = "SELECT * FROM usuarios where usuario_nombre = :nombre";

				$sentencia = $conexion->prepare($sql);

				$sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);

				$sentencia->execute();

				$resultado = $sentencia->fetchAll();

				if(count($resultado)){
					$nombreExiste = true;
				}
				else{
					$nombreExiste = false;
				}

			}catch(PDOException $e){
				print "ERROR ". $e->getMessage();
			}

		}
		return $nombreExiste;
	}



    public static function emailExiste($conexion, $email){

		$emailExiste = true;

		if(isset($conexion)){

			try{

				$sql = "SELECT * FROM usuarios where usuario_email = :email";

				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(':email', $email, PDO::PARAM_STR);
				$sentencia->execute();

				$resultado = $sentencia->fetchAll();

				if(count($resultado)){
					$emailExiste = true;
				}
				else{
					$emailExiste = false;
				}

			}catch(PDOException $e){
				print "ERROR ". $e->getMessage();
			}

		}

		return $emailExiste;
	}

}

?>