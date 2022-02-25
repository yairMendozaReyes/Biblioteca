<?php include_once 'header.php'; ?>
<body>
    <?php include_once 'naves.php'; ?>
    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">LectoActiva<small>Autoevaluación</small></h1>
        </div>
    </div>
    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="Vista/assets/img/flat-book.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                Bienvenido a la respuesta del Documento seleccionado.
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="title-flat-form title-flat-blue">Respuesta a su Autoevaluación</div>

            <form autocomplete="off" method="POST" action="index.php?accion=evaluar" data-form="save" enctype="multipart/form-data">
                <div class="container">

                    <div class="form-group">
                        <label><strong style="color:green;">Solución a las Multiple con unica Respuesta:</strong></label>
                    </div>

                    <div class="form-group">
                        <?php if ($r1 == 0) { ?>
                            <p><strong>Pregunta 1.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 1.  </strong> <strong style="color:green;">Gano</strong> </p>

                        <?php } ?>     

                    </div>
                    
                    
                    <div class="form-group">
                        <?php if ($r2 == 0) { ?>
                            <p><strong>Pregunta 2.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 2.  </strong> <strong style="color:green;">Gano</strong> </p>
                        <?php } ?>     
                    </div>
                    
                     <div class="form-group">
                        <?php if ($r3 == 0) { ?>
                            <p><strong>Pregunta 3.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 3.  </strong> <strong style="color:green;">Gano</strong> </p>
                        <?php } ?>     
                    </div>
                    
                     <div class="form-group">
                        <?php if ($r4 == 0) { ?>
                            <p><strong>Pregunta 4.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 4.  </strong> <strong style="color:green;">Gano</strong> </p>
                        <?php } ?>     
                    </div>
                    
                     <div class="form-group">
                        <?php if ($r5 == 0) { ?>
                            <p><strong>Pregunta 5.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 5.  </strong> <strong style="color:green;">Gano</strong> </p>
                        <?php } ?>     
                    </div>
                    
                    <div class="form-group">
                        <?php if ($r6 == 0) { ?>
                            <p><strong>Pregunta 6.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 6.  </strong> <strong style="color:green;">Gano</strong> </p>
                        <?php } ?>     
                    </div>
                    
                      <div class="form-group">
                        <?php if ($r7 == 0) { ?>
                            <p><strong>Pregunta 7.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 7.  </strong> <strong style="color:green;">Gano</strong> </p>
                        <?php } ?>     
                    </div>
                    
                    
                      <div class="form-group">
                        <?php if ($r8 == 0) { ?>
                            <p><strong>Pregunta 8.  </strong> <strong style="color:red;">Perdio</strong> </p>
                        <?php } else { ?>  
                            <p><strong>Pregunta 8.  </strong> <strong style="color:green;">Gano</strong> </p>
                        <?php } ?>     
                    </div>
                    
                    
            </form>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>

