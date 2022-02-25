<?php include_once 'header.php';?>
<body>
  <?php include_once 'nav.php';?>
     <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">LectoActiva <small>Añadir libro o Articulos</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="Vista/assets/img/flat-book.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para agregar nuevos Documento al sistema, deberas de llenar todos los campos para poder registrar el documento.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo Documento</li>
                      <li><a href="index.php?accion=documento">Listado de Documento</a></li>

                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form autocomplete="off" method="POST" action="index.php?accion=documentoguardar" data-form="save" enctype="multipart/form-data">
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">Nuevo libro</div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <legend><strong>Información básica</strong></legend><br>
                            <div class="group-material">
                                <span>Documento</span>
                                <select class="tooltips-general material-control" id="tipo" name="tipo" data-toggle="tooltip" data-placement="top" title="Elige la categoría del libro">
                                    <option value="LIBRO">Libro</option>
                                    <option value="ARTICULO">Articulo</option>
                                </select>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="codigo" name="codigo" placeholder="Escribe aquí el código correlativo del documento" pattern="[0-9]{1,20}" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe el código correlativo del libro, solamente números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Código correlativo</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="titulo" name="titulo" placeholder="Escribe aquí el título o nombre del documento" required="" data-toggle="tooltip" data-placement="top" title="Escribe el título o nombre del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Título</label>
                            </div>
                            
                            <div class="group-material">
                                <input type="file" class="material-control tooltips-general" id="documento" name="documento" placeholder="Escribe aquí la edición del libro" required=""  data-toggle="tooltip" data-placement="top" title="Edición del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Documento</label>
                            </div>
                            <label style="color:red;">Descripción</label>

                            <div class="group-material">
                                 <textarea class="form-control"  id="descripcion" name="descripcion" placeholder="Escribe aquí la descripción de documento" required="" rows="5" data-toggle="tooltip" data-placement="top" title="Escribe la Descripción"></textarea>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                               <hr/>

                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="autor" name="autor" placeholder="Escribe aquí el autor del documento" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del autor del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Autor</label>
                            </div>
                            
                      
                           <div class="group-material">
                               <input type="text" class="material-control tooltips-general"  id="fechapublicacion" name="fechapublicacion"  placeholder="Escribe aquí el año del documento" required="" pattern="[0-9]{1,4}" maxlength="4" data-toggle="tooltip" data-placement="top" title="Solamente números, sin espacios">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Año de publicación</label>
                           </div>
                         
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p>
                       </div>
                   </div>
                </div>
            </form>
        </div>
        
        
        <?php include_once 'footer.php';?>
    </div>
</body>
</html>

