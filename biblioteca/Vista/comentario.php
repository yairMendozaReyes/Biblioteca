<?php include_once 'header.php'; ?>
<body>
    <?php include_once 'naves.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">LectoActiva<small>Administración de comentarios</small></h1>
        </div>
    </div>
    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="Vista/assets/img/checklist.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                <?php $datos = $resultdoc->fetch_object() ?>
                Bienvenido a la sección para registras comentarios del documento <strong class="text-danger"><?php echo $datos->titulo; ?> </strong>
                <br/>

                <a data-toggle="modal" href="#myModal" class="btn btn-warning btn-sm">Nuevo Comentario&nbsp;&nbsp; <i class="zmdi zmdi-notifications"></i></a>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Ingrese el comentario </h4>
                            </div>
                            <div class="modal-body">
                                <form autocomplete="off" method="POST" action="index.php?accion=comentarioagregar" data-form="save" >
                                    <input type="hidden" class="material-control tooltips-general" name="id" id="id" value="<?php echo $datos->docid; ?>">
                                    <div class="container-flat-form">
                                        <div class="title-flat-form title-flat-blue">Nuevo Comentario</div>
                                        <textarea class="form-control"  id="comentario" name="comentario" placeholder="Escribe el comentario" required="" rows="5" data-toggle="tooltip" data-placement="top" title="Escribe la pregunta"></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>

                                        <p class="text-center">
                                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                        </p>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php ?>


            </div>
        </div>
    </div>


    <div class="container-fluid">
        <h2 class="text-center all-tittles">listado de comentarios</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="div-table-cell">Comentario</th>
                        <th scope="div-table-cell">Fecha</th>
                        <th scope="div-table-cell">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = $resultcom->fetch_object()) { ?>
                        <tr>
                            <th><?php echo $fila->comentario ?></th>
                            <th><?php echo $fila->fecha ?></th>
                            <th><?php echo $fila->hora ?></th>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>


    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>