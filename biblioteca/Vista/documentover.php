<?php include_once 'header.php'; ?>
<body>
    <?php include_once 'nav.php'; ?>
    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">LectoActivaS<small>Añadir libro o Articulos</small></h1>
        </div>
    </div>
    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="Vista/assets/img/flat-book.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para actualizar Documentos al sistema, deberas de llenar todos los campos para poder actualizar el documento.
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="breadcrumb">
                        <li><a href="index.php?accion=documentonuevo">Nuevo Documento</a></li>
                    <li><a href="index.php?accion=documento">Listado de Documentos</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php $datos = $result->fetch_object() ?>
        <form autocomplete="off" method="POST" action="index.php?accion=documentoactualizar" data-form="save" enctype="multipart/form-data">
            <input type="hidden" class="material-control tooltips-general" name="id" id="id" value="<?php echo $datos->docid; ?>">

            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Actualizar Documento</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <legend><strong>Información básica</strong></legend><br>
                        <div class="group-material">
                            <span>Documento</span>
                            <select class="tooltips-general material-control" id="tipo" name="tipo" data-toggle="tooltip" data-placement="top" title="Elige la categoría del libro">
                                <?php if ($datos->tipo == "LIBRO") { ?>
                                    <option value="LIBRO" selected>Libro</option>
                                    <option value="ARTICULO">Articulo</option>
                                <?php } else { ?>
                                    <option value="LIBRO" >Libro</option>
                                    <option value="ARTICULO" selected>Articulo</option>
                                <?php } ?>
                            </select>


                            </select>
                        </div>
                        <label>Código correlativo</label>
                        <div class="group-material">
                            <input type="text" class="tooltips-general material-control" id="nuevocodigo" value="<?php echo $datos->codigo; ?>" name="nuevocodigo" placeholder="Escribe aquí el código correlativo del documento" pattern="[0-9]{1,20}" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe el código correlativo del libro, solamente números" disabled>
                            <input type="hidden" class="tooltips-general material-control" id="codigo" value="<?php echo $datos->codigo; ?>" name="codigo" >

                            <span class="highlight"></span>
                            <span class="bar"></span>
                        </div>
                        <div class="group-material">
                            <input type="text" class="tooltips-general material-control" id="titulo" name="titulo" value="<?php echo $datos->titulo; ?>" placeholder="Escribe aquí el título o nombre del documento" required="" data-toggle="tooltip" data-placement="top" title="Escribe el título o nombre del libro">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Título</label>
                        </div>

                        <div class="group-material">
                            <input type="file" class="material-control tooltips-general" id="nuevodocumento" name="nuevodocumento" placeholder="Escribe aquí la edición del libro" data-toggle="tooltip" data-placement="top" title="Edición del libro">
                            <input type="hidden" class="material-control tooltips-general" id="documento" name="documento"  value="<?php echo $datos->documento; ?>">

                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Documento</label>
                        </div>
                        <label style="color:red;">Descripción</label>

                        <div class="group-material">
                            <textarea class="form-control"  id="descripcion" name="descripcion" value="<?php echo $datos->descripcion; ?>" placeholder="Escribe aquí la descripción de documento" required="" rows="5" data-toggle="tooltip" data-placement="top" title="Escribe la Descripción"><?php echo $datos->descripcion; ?></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <hr/>

                        </div>
                        <div class="group-material">
                            <input type="text" class="tooltips-general material-control" id="autor" name="autor" value="<?php echo $datos->autor; ?>" placeholder="Escribe aquí el autor del documento" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del autor del libro">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Autor</label>
                        </div>


                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general"  id="fechapublicacion" name="fechapublicacion"  value="<?php echo $datos->fechapublicacion; ?>" placeholder="Escribe aquí el año del documento" required="" pattern="[0-9]{1,4}" maxlength="4" data-toggle="tooltip" data-placement="top" title="Solamente números, sin espacios">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Año de publicación</label>
                        </div>

                        <p class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Actualizar</button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
        <?php ?>
    </div>
    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>

