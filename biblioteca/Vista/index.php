<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="Vista/css/sweet-alert.css">
    <link rel="stylesheet" href="Vista/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="Vista/css/normalize.css">
    <link rel="stylesheet" href="Vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vista/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="Vista/css/style.css">
    <link rel="stylesheet" href="Vista/css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="Vista/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="Vista/js/modernizr.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <script src="Vista/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Vista/js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(Vista/assets/img/font-login.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
        <form action="index.php?accion=login" method="post">
            <div class="group-material-login">
              <input type="number" class="material-login-control" name="usuario" id="usuario" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Cedula</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" name="contrasena" id="contrasena"  class="material-login-control" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <div class="group-material">
                <select class="material-control-login" name="tipo" id="tipo">
                    <option value="1">Estudiante</option>
                    <option value="2">Administrador</option>
                </select>
            </div>
            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>  
</body>
</html>