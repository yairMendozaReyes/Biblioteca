<?php include_once 'header.php'; ?>
<body>
    <?php include_once 'nav.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">LectoActiva <small>Administración de Preguntas</small></h1>
        </div>
    </div>
    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="Vista/assets/img/checklist.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                <?php $datos = $resultdoc->fetch_object() ?>
                Bienvenido a la sección para registras las preguntas y ingresar sus respuestas del documento  <strong class="text-danger"><?php echo $datos->titulo; ?> </strong>
                <?php ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="breadcrumb">
                    <li><a href="index.php?accion=documento">Listado de documentos</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="text-center all-tittles">listado de preguntas</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="div-table-cell">Numero</th>
                        <th scope="div-table-cell">Pregunta</th>
                        <th scope="div-table-cell">Ingresar</th>
                        <th scope="div-table-cell">Respuesta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = $result->fetch_object()) { ?>
                        <tr>
                            <th><?php echo $fila->numero ?></th>
                            <td><?php echo $fila->pregunta ?></td>
                            <td>
                                <a data-toggle="modal" href="#myModal<?php echo $fila->preid ?>" class="btn btn-warning btn-sm"><i class="zmdi zmdi-file-text"></i></a>

                                <div class="modal fade" id="myModal<?php echo $fila->preid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Ingrese la pregunta </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form autocomplete="off" method="POST" action="index.php?accion=preguntaactualizar" data-form="save" >
                                                    <input type="hidden" class="material-control tooltips-general" name="id" id="id" value="<?php echo $fila->preid; ?>">
                                                    <input type="hidden" class="material-control tooltips-general" name="iddocumento" id="iddocumento" value="<?php echo $fila->iddocumento; ?>">
                                                    <input type="hidden" class="material-control tooltips-general" name="numero" id="numero" value="<?php echo $fila->numero; ?>">

                                                    <div class="container-flat-form">
                                                        <div class="title-flat-form title-flat-blue">Pregunta No. <?php echo $fila->numero ?></div>
                                                        <textarea class="form-control"  id="pregunta" name="pregunta" value="<?php echo $fila->pregunta; ?>" placeholder="Escribe la pregunta" required="" rows="10" data-toggle="tooltip" data-placement="top" title="Escribe la pregunta"><?php echo $fila->pregunta; ?></textarea>
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
                            </td>
                            <td><a href="index.php?accion=respuestaver&id=<?php echo $fila->iddocumento; ?>&pre=<?php echo $fila->numero; ?>"  class="btn btn-primary btn-sm"><i class="zmdi zmdi-alert-circle-o"></i></a></td>


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