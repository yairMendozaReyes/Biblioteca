<?php include_once 'header.php'; ?>
<body>
    <?php include_once 'nav.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">LectoActiva <small>Administración de Respuesta</small></h1>
        </div>
    </div>
    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="Vista/assets/img/checklist.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
               <?php $datos = $resultdoc->fetch_object() ?>
                Bienvenido a la sección para registras las respuestas del documento  <strong class="text-danger"><?php echo $datos->titulo; ?> </strong>
                <?php ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="breadcrumb">
                    <li><a href="index.php?accion=documento">Listado de documentos</a></li>
                    <li><a href="index.php?accion=preguntaver&id=<?php echo $datos->docid; ?>">Preguntas</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="text-center all-tittles">listado de respuestas</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="div-table-cell">Numero</th>
                        <th scope="div-table-cell">Respuesta</th>
                        <th scope="div-table-cell">Solucion</th>

                        <th scope="div-table-cell">Ingresar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = $result->fetch_object()) { ?>
                        <tr>
                            <th><?php echo $fila->numero ?></th>
                            <td><?php echo $fila->respuesta ?></td>
                            <td><?php echo $fila->solucion ?></td>
                            <td>
                                <a data-toggle="modal" href="#myModal<?php echo $fila->resid ?>" class="btn btn-warning btn-sm"><i class="zmdi zmdi-file-text"></i></a>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $fila->resid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Ingrese la respuesta </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form autocomplete="off" method="POST" action="index.php?accion=respuestaactualizar" data-form="save" >
                                                    <input type="hidden" class="material-control tooltips-general" name="id" id="id" value="<?php echo $fila->resid; ?>">
                                                    <input type="hidden" class="material-control tooltips-general" name="iddocumento" id="iddocumento" value="<?php echo $fila->iddocumento; ?>">
                                                    <input type="hidden" class="material-control tooltips-general" name="pregunta" id="iddocumento" value="<?php echo $fila->idpregunta; ?>">
                                                    <input type="hidden" class="material-control tooltips-general" name="numero" id="numero" value="<?php echo $fila->numero; ?>">

                                                    <div class="container-flat-form">
                                                        <div class="title-flat-form title-flat-blue">Respuesta No. <?php echo $fila->numero ?></div>
                                                        <textarea class="form-control"  id="respuesta" name="respuesta" value="<?php echo $fila->respuesta; ?>" placeholder="Escribe la respuesta" required="" rows="6" data-toggle="tooltip" data-placement="top" title="Escribe la respuesta"><?php echo $fila->respuesta; ?></textarea>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                    </div>


                                                    <div class="group-material">
                                                        <span>Respuesta Correcta</span>
                                                        <select class="tooltips-general material-control" id="solucion" name="solucion" data-toggle="tooltip" data-placement="top" title="Elige la categoría del libro">
                                                            <?php if ($fila->solucion == 0) { ?>
                                                                <option value="0" selected="">Falsa</option>
                                                                <option value="1">Verdadera</option>
                                                            <?php } else { ?>
                                                                <option value="0">Falsa</option>
                                                                <option value="1"  selected="">Verdadera</option>
                                                            <?php } ?>
                                                        </select>
                                                        <p class="text-center">
                                                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                                        </p>   
                                                    </div>
                                                </form>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
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