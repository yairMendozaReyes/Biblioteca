<?php include_once 'header.php';?>
<body>
  <?php include_once 'nav.php';?>
   
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">LectoActiva<small>Administración de Estudiantes</small></h1>
            </div>
        </div>
       <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="Vista/assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de estudiantes, podrás buscar los estudiantes por identificación o nombre. Puedes actualizar o eliminar los datos del estudiante.<br>
                    <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el estudiante del sistema se borrarán todos los datos relacionados con él.
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="index.php?accion=estudiantenuevo">Nuevo estudiante</a></li>
                        <li class="active">Listado de estudiantes</li>
                    </ol>
                </div>
            </div>
        </div>
       
        <div class="container-fluid">
            <h2 class="text-center all-tittles">listado de estudiantes</h2>
            <div class="table-responsive">
                  <table class="table">
                <thead>
                    <tr>
                        <th scope="div-table-cell">Identificación</th>
                        <th scope="div-table-cell">Nombres y Apellidos</th>
                        <th scope="div-table-cell">Celular</th>
                        <th scope="div-table-cell">Correo</th>
                        <th scope="div-table-cell">Carrera</th>
                        <th scope="div-table-cell">Sede</th>
                        <th scope="div-table-cell"></th>
                        <th scope="div-table-cell"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = $result->fetch_object()) { ?>
                        <tr>
                            <th><?php echo $fila->dni ?></th>
                            <td><?php echo $fila->nombre ?> <?php echo $fila->apellido ?></td>
                            <td><?php echo $fila->celular ?></td>
                            <td><?php echo $fila->correo ?></td>
                             <td><?php echo $fila->carrera ?></td>
                            <td><?php echo $fila->sede ?></td>

                            <td><a href="index.php?accion=estudiantever&id=<?php echo $fila->estid; ?>"  class="btn btn-success btn-sm"><i class="zmdi zmdi-refresh"></i></a></td>
                            <td>
                                <form  action="index.php?accion=estudianteeliminar" method="post" onSubmit="return confirm('¿Desea eliminar la información?')">
                                    <input type="hidden" class="form-control form-control-sm" name="id" value = "<?php echo $fila->estid; ?>">
                                 
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