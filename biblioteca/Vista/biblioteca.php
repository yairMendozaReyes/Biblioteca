<?php include_once 'header.php'; ?>
<body>
    <?php include_once 'naves.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">LectoActiva <small>Documentos</small></h1>
        </div>
    </div>
    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="Vista/assets/img/checklist.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                Bienvenido al catálogo, selecciona un documento de la lista para empezar.
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <?php while ($fila = $result->fetch_object()) { ?>

            <div class="media media-hover">
                <div class="media-left media-middle">
                    <a href="#!" class="tooltips-general" data-toggle="tooltip" data-placement="right" title="Más información del libro">
                        <img class="media-object" src="Vista/assets/img/book.png" alt="Libro" width="48" height="48">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">1 - <?php echo $fila->titulo ?></h4>
                    <div class="pull-left">
                        <strong><?php echo $fila->tipo ?></strong><br>
                        <strong>Autor: <?php echo $fila->autor ?></strong><br>
                        <strong>Año: <?php echo $fila->fechapublicacion ?></strong><br>
                    </div>
                    <p class="text-center pull-right">
                       <a data-toggle="modal" href="#myModal<?php echo $fila->docid ?>" class="btn btn-info btn-xs" style="margin-right: 10px;"><i class="zmdi zmdi-info-outline"></i> &nbsp;&nbsp; Más información</a>
                    </p>
                    <div class="modal fade" id="myModal<?php echo $fila->docid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"> <strong><?php echo $fila->tipo ?> : <?php echo $fila->titulo ?></strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <p style="text-align: justify"><?php echo $fila->descripcion ?></p>
                                                <strong>Ver documento: </strong>
                                                <a href="http://localhost/<?php echo $fila->documento ?>" class="btn btn-info" target="_blak"><i class="zmdi zmdi-book-image"></i></a>
                                                <br/><br/>
                                                <strong>Autoevaluarme: </strong>
                                                <a href="index.php?accion=autoevaluarme&id=<?php echo $fila->docid; ?>" class="btn btn-warning"><i class="zmdi zmdi-face"></i></a>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                     <p class="text-center pull-right">
                       <a href="index.php?accion=comentario&id=<?php echo $fila->docid ?>" class="btn btn-warning btn-xs" style="margin-right: 10px;"><i class="zmdi zmdi-info-outline"></i> &nbsp;&nbsp; Comentario</a>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>


    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>