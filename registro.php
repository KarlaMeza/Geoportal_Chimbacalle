<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Geoportal de Delitos Chimbacalle</title>
		<link rel="shortcut icon" type="./image/x-icon" href="libs/images/logo.ico" />
  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="libs/css/styles2.css" rel="stylesheet" />
        <!-- Switchery -->
	    <script src="./vendors/switchery/dist/switchery.min.js"></script>
        <script src="./vendors/switchery/dist/switchery.min.js"></script>

    </head>
    <body class="bg-primary">
       <!-- Background Video-->
     <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="libs/images/mp4/bg.mp4" type="video/mp4" /></video>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear una cuenta</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="php-postgresql/app/registro-usuario.php">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name= "usuario_nombre" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" name= "usuario_apellido" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name= "usuario_email" placeholder="name@example.com" />
                                                <label for="inputEmail">Correo Electrónico</label>
                                            </div>


                                            <div class="form-control">
                                            <div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Rol de usuario</label>
                                            <br>
											<div class="col-md-9 col-sm-9 ">
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" name= "usuario_rol" checked /> Administrador
													</label>
												</div>
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" name= "usuario_rol"/> Público
													</label>
												</div>
											</div>
										    </div>
                                            </div>
                                            <br>

                                            <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" name="usuario_contrasena" placeholder="Create a password" />
                                                        <label for="inputPassword">Contraseña</label>
                                            </div>
                                           

                        
                      
												
																			
											
							               
                                       

                                        <div class="mt-4 mb-0">
                                                <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Crear Cuenta"></div>
                                        </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Tiene una cuenta? Ir a Iniciar Sesión</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="libs/js/scripts.js"></script>
    </body>
</html>
