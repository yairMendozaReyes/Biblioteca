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
                Bienvenido a la sección para evaluar lo aprendido durante la lectura del Documento, deberas de llenar todos los campos para poder completar la autoevaluación, trata de no enviar un elemento incompleto.
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="title-flat-form title-flat-blue">Evaluación</div>

            <form autocomplete="off" method="POST" action="index.php?accion=evaluar" data-form="save">
                <div class="container">

                    <div class="form-group">
                        <label><strong style="color:green;">Test Seleccion Multiple con unica Respuesta:</strong></label>
                    </div>
                   
                    <div class="form-group">
                        <?php $pre1 = $pregunta1->fetch_object() ?>
                      <input type="hidden" class="material-control tooltips-general" name="id" id="id" value="<?php echo $pre1->iddocumento; ?>">

                        <p><strong>1.  <?php echo $pre1->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res1 = $respuesta1->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_1"value="<?php echo $res1->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res1->numero; ?>.</strong> <?php echo $res1->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>
                    
                    
                    <div class="form-group">
                        <?php $pre2 = $pregunta2->fetch_object() ?>
                        <p><strong>2.  <?php echo $pre2->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res2 = $respuesta2->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_2" value="<?php echo $res2->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res2->numero; ?>.</strong> <?php echo $res2->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>
                    
                    <div class="form-group">
                        <?php $pre3 = $pregunta3->fetch_object() ?>
                        <p><strong>3.  <?php echo $pre3->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res3 = $respuesta3->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_3" value="<?php echo $res3->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res3->numero; ?>.</strong> <?php echo $res3->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>
                    
                    
                        <div class="form-group">
                        <?php $pre4 = $pregunta4->fetch_object() ?>
                        <p><strong>4.  <?php echo $pre4->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res4 = $respuesta4->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_4" value="<?php echo $res4->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res4->numero; ?>.</strong> <?php echo $res4->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>
                    
                    
                       
                        <div class="form-group">
                        <?php $pre5 = $pregunta5->fetch_object() ?>
                        <p><strong>5.  <?php echo $pre5->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res5 = $respuesta5->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_5" value="<?php echo $res5->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res5->numero; ?>.</strong> <?php echo $res5->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <?php $pre6 = $pregunta6->fetch_object() ?>
                        <p><strong>6.  <?php echo $pre6->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res6 = $respuesta6->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_6" value="<?php echo $res6->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res6->numero; ?>.</strong> <?php echo $res6->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>

                    
                     
                    <div class="form-group">
                        <?php $pre7 = $pregunta7->fetch_object() ?>
                        <p><strong>7.  <?php echo $pre7->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res7 = $respuesta7->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_7" value="<?php echo $res7->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res7->numero; ?>.</strong> <?php echo $res7->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>
                    

 <div class="form-group">
                        <?php $pre8 = $pregunta8->fetch_object() ?>
                        <p><strong>8.  <?php echo $pre8->pregunta; ?></strong> </p>
                        <?php ?>
                        <?php while ($res8 = $respuesta8->fetch_object()) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="PR_8" value="<?php echo $res8->solucion; ?> ">
                                <label class="form-check-label">
                                    <p style="text-align: justify;"><strong><?php echo $res8->numero; ?>.</strong> <?php echo $res8->respuesta; ?> </p>
                                </label>
                            </div>
                        <?php } ?>         
                    </div>
                      <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Enviar</button>

                       </div>
                </div>
            </form>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>

