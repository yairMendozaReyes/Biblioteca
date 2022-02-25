<?php include_once 'header.php';?>
<body>
  <?php include_once 'nav.php';?>
     <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="Vista/assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos estudiantes, para poder registrar un estudiante deberás de llenar todos los campos del siguiente formulario
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo estudiante</li>
                      <li><a href="index.php?accion=estudiantes">Listado de estudiantes</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo estudiante</div>
                <form autocomplete="off" action="index.php?accion=estudianteguardar" method="post" >
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                           <legend>Datos del estudiante</legend>
                           <br><br>
                            <div class="group-material">
                                <input type="number" class="material-control tooltips-general" name="dni" id="dni" placeholder="Escribe aquí el DNI del estudiante" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="DNI de estudiante">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número de Identificación</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre" id="nombre" placeholder="Escribe aquí los nombres del estudiante" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Nombres del estudiante">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"  name="apellido" id="apellido" placeholder="Escribe aquí los apellidos del estudiante" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Apellidos del estudiante">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                            <div class="group-material">
                                <input type="number" class="material-control tooltips-general" placeholder="Escribe aquí Celular del estudiante" name="celular" id="celular" pattern="[0-9]{11,11}" required="" maxlength="11" data-toggle="tooltip" data-placement="top" title="Solamente 11 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Celular</label>
                            </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general"  name="correo" id="correo" placeholder="Escribe aquí correo electronico del estudiante" required="" data-toggle="tooltip" data-placement="top" title="Correo del estudiante">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                            </div>
                           <div class="group-material">
                                <span>Carrera</span>
                                <select class="material-control tooltips-general" name="carrera" id="carrera" data-toggle="tooltip" data-placement="top" title="Elige la carrera a la que pertenece el estudiante">
                                     <?php while ($carrera = $result->fetch_object()) { ?>
                                <option value = "<?php echo $carrera->carid; ?>"><?php echo $carrera->carrera; ?></option>
                            <?php } ?>
                                </select>
                            </div>
                           
                           <div class="group-material">
                                <span>Sede</span>
                                <select class="material-control tooltips-general" name="sede" id="sede" data-toggle="tooltip" data-placement="top" title="Elige la sede donde estudia el estudiante">
                                     <?php while ($sede = $result2->fetch_object()) { ?>
                                <option value = "<?php echo $sede->sedid; ?>"><?php echo $sede->sede; ?></option>
                            <?php } ?>
                                </select>
                            </div>                          
                         <div class="group-material">
                                <input type="text" class="material-control tooltips-general"  name="contrasena" id="contrasena" placeholder="Escribe aquí contrasena del estudiante" required="" data-toggle="tooltip" data-placement="top" title="Contraseña del estudiante">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                           
                            <p class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                  <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>

                            </p> 
                       </div>
                    </div>
                </form>
            </div>
        </div>
        
        
        <?php include_once 'footer.php';?>
    </div>
</body>
</html>

