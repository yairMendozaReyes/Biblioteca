<?php include_once 'header.php'; ?>
<body>
    <?php include_once 'nav.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">LectoActiva <small>Administración Acceso</small></h1>
        </div>
    </div>
    <div class="container-fluid">
        <form autocomplete="off" method="POST" action="index.php?accion=configuracionactualizar" data-form="save" enctype="multipart/form-data">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Cambio de Acceso</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <legend><strong>Cambio de acceso al sistema</strong></legend><br>

                        <div class="group-material">
                            <input type="number" class="tooltips-general material-control" id="usuario" name="usuario" placeholder="Ingrese su numero de acceso" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe usuario de acceso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Usuario</label>
                        </div>
                        <div class="group-material">
                            <input type="text" class="tooltips-general material-control" id="contrasena" name="contrasena" placeholder="Ingrese su contrasena de acceso" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe contrasena de acceso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Contrasena:</label>
                        </div>

                        <p class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Actualizar</button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>