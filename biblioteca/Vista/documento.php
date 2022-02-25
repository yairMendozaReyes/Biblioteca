<?php include_once 'header.php';?>
<body>
  <?php include_once 'nav.php';?>
   
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">LectoActiva<small>Administración de Libros</small></h1>
            </div>
        </div>
       <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="Vista/assets/img/checklist.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                     Bienvenido a la sección donde se encuentra el listado de Documentos , podrás buscar los Documentos por codigo o nombre. Puedes actualizar o eliminar los datos del libro.<br>
                    <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el Documento del sistema se borrarán todos los datos relacionados con él.
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="index.php?accion=documentonuevo">Nuevo Documento</a></li>
                        <li class="active">Listado de Documento</li>
                    </ol>
                </div>
            </div>
        </div>
       
        <div class="container-fluid">
            <h2 class="text-center all-tittles">listado de Documentos</h2>
            <div class="table-responsive">
                  <table class="table">
                <thead>
                    <tr>
                       <th scope="div-table-cell">Tipo</th>
                        <th scope="div-table-cell">Código</th>
                        <th scope="div-table-cell">Titulo</th>
                        <th scope="div-table-cell">Descripción</th>
                        <th scope="div-table-cell">Autor</th>
                        <th scope="div-table-cell">Año Publicacion</th>
                        <th scope="div-table-cell">Libro</th>
                        <th scope="div-table-cell">Preguntas</th>
                        <th scope="div-table-cell">Actualizar</th>
                        <th scope="div-table-cell">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = $result->fetch_object()) { ?>
                        <tr>
                            <th><?php echo $fila->tipo ?></th>
                            <th><?php echo $fila->codigo ?></th>
                            <td><?php echo $fila->titulo ?></td>
                            <td><?php echo $fila->descripcion ?></td>
                            <td><?php echo $fila->autor ?></td>
                             <td><?php echo $fila->fechapublicacion ?></td>
                             <td><a href="http://localhost/<?php echo $fila->documento ?>" class="btn btn-warning btn-sm" target="_blak"><i class="zmdi zmdi-file-plus"></i></a></td>
                            <td><a href="index.php?accion=preguntaver&id=<?php echo $fila->docid; ?>"  class="btn btn-primary btn-sm"><i class="zmdi zmdi-help-outline"></i></a></td>

                            <td><a href="index.php?accion=documentover&id=<?php echo $fila->docid; ?>"  class="btn btn-success btn-sm"><i class="zmdi zmdi-refresh"></i></a></td>

                            <td>
                                <form  action="index.php?accion=documentoeliminar" method="post" onSubmit="return confirm('¿Desea eliminar la información?')">
                                    <input type="hidden" class="form-control form-control-sm" name="id" value = "<?php echo $fila->docid; ?>">
                                 
                                     <button type="submit" class="btn btn-danger btn-sm"><i class="zmdi zmdi-delete"></i></button>

                                </form>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
                </div>
            </div>
                    
        
        <?php include_once 'footer.php';?>
    </div>
</body>
</html>