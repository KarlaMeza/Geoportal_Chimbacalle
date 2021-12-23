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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="libs/css/styles2.css" rel="stylesheet" />
    </head>
    <body class="bg-primary">

     <!-- Background Video-->
     <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="libs/images/mp4/bg.mp4" type="video/mp4" /></video>
     <!-- Masthead-->
    <div class="container-fluid px-4 px-lg-0">
     <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="php-postgresql/app/ingresar-usuario.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="usuario_email" placeholder="name@example.com" />
                                                <label for="inputEmail">Correo Electrónico</label>
                                            </div>
                                            <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                                            <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="usuario_contrasena" placeholder="Password" />
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recordar contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Olvidó su contraseña?</a>
                                                <input class="btn btn-primary" type="submit" value="Ingresar">
                                            </div>
                                            <!-- Submit success message-->
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registro.php">Necesita una cuenta? Regístrese!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="libs/js/scripts.js"></script>
    </body>
</html>
