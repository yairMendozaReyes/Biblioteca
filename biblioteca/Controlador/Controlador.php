<?php

class Controlador {

    public function verPagina($ruta) {
        require_once $ruta;
    }

    public function verAdministrador() {
        require_once 'Vista/admin.php';
    }
    
    public function Login($cedula, $contrasena, $tipo) {
        $CRUD = new CRUDlibrarti();
        $result = null;
        if ($tipo == "1") { // ESTUDIAONTE
            $result = $CRUD->consultarLoginestudioante($cedula, $contrasena);
        } else {
            $result = $CRUD->consultarLoginAdmin($cedula, $contrasena);
        }

        $cantidad = 0;
        if (!empty($result->num_rows) && $result->num_rows > 0) {
            while ($fila = $result->fetch_object()) {
                $cantidad = 1;
            }
        } else {
            $cantidad = 0;
        }

        if ($cantidad == 0) {
            echo '<script language="javascript">alert("Usuario y Contrasena Incorrectos");</script>';
            require_once 'Vista/index.php';
        } else {
            if ($tipo == "1") { // ESTUDIAONTE
                $CRUD = new CRUDlibrarti();
                $result = $CRUD->Documentolistados();
                require_once 'Vista/biblioteca.php';
            } else {
                require_once 'Vista/admin.php';
            }
        }
    }

    public function estudiantelistar() {
        $CRUD = new CRUDlibrarti();
        $result = $CRUD->Estudiantemostrar();
        require_once 'Vista/estudiante.php';
    }

    public function estudiantenuevo() {
        $CRUD = new CRUDlibrarti();
        $result = $CRUD->mostrarCarrera();
        $result2 = $CRUD->mostrarSede();
        require_once 'Vista/estudiantenuevo.php';
    }

    public function estudianteagregar($dni, $nombre, $apellido, $celular, $correo, $carrera, $sede, $contrasena) {
        $CRUD = new CRUDlibrarti();
        $resultest = $CRUD->Estudiantecantidad($dni);
        $cantidadestudiante = $resultest->num_rows;
        if ($cantidadestudiante != 0) {
            echo '<script language="javascript">alert("El DNI ya ha sido registrado");</script>';
            $result = $CRUD->mostrarCarrera();
            $result2 = $CRUD->mostrarSede();
            require_once 'Vista/estudiantenuevo.php';
        } else {
            $estudiante = new Estudiante(null, $dni, $nombre, $apellido, $celular, $correo, $carrera, $sede, $contrasena);
            $CRUD->Estudianteagregar($estudiante);
            echo '<script language="javascript">alert("Estudiante Registrado");</script>';

            $result = $CRUD->mostrarCarrera();
            $result2 = $CRUD->mostrarSede();
            require_once 'Vista/estudiantenuevo.php';
        }
    }

    public function estudiantever($id) {
        $CRUD = new CRUDlibrarti();
        $resultCr = $CRUD->mostrarCarrera();
        $resultSe = $CRUD->mostrarSede();
        $result = $CRUD->Estudiantever($id);
        require_once 'Vista/estudiantever.php';
    }

    public function estudianteactualizar($id, $dni, $nuevodni, $nombre, $apellido, $celular, $correo, $carrera, $sede, $contrasena) {
        $CRUD = new CRUDlibrarti();
        // actualizar sin consultar
        if ($dni == $nuevodni) {
            $estudiante = new Estudiante($id, $dni, $nombre, $apellido, $celular, $correo, $carrera, $sede, $contrasena);
            $CRUD->Estudianteactualizar($estudiante);
            echo '<script language="javascript">alert("Estudiante actualizado");</script>';
            $resultCr = $CRUD->mostrarCarrera();
            $resultSe = $CRUD->mostrarSede();
            $result = $CRUD->Estudiantever($id);
            require_once 'Vista/estudiantever.php';
        } else { // nueva cedula
            $resultest = $CRUD->Estudiantecantidad($nuevodni);
            $cantidadestudiante = $resultest->num_rows;
            if ($cantidadestudiante != 0) {
                echo '<script language="javascript">alert("El DNI ya ha sido registrado");</script>';
                $resultCr = $CRUD->mostrarCarrera();
                $resultSe = $CRUD->mostrarSede();
                $result = $CRUD->Estudiantever($id);
                require_once 'Vista/estudiantever.php';
            } else {
                $estudiante = new Estudiante($id, $nuevodni, $nombre, $apellido, $celular, $correo, $carrera, $sede, $contrasena);
                $CRUD->Estudianteactualizar($estudiante);
                echo '<script language="javascript">alert("Estudiante actualizado");</script>';
                $resultCr = $CRUD->mostrarCarrera();
                $resultSe = $CRUD->mostrarSede();
                $result = $CRUD->Estudiantever($id);
                require_once 'Vista/estudiantever.php';
            }
        }
    }

    public function estudianteeliminar($id) {
        $CRUD = new CRUDlibrarti();
        $cancelar = $CRUD->Estudianteeliminar($id);
        $result = $CRUD->Estudiantemostrar();
        require_once 'Vista/estudiante.php';
    }

    public function biblioteca() {
        $CRUD = new CRUDlibrarti();
        $result = $CRUD->Documentolistados();
        require_once 'Vista/biblioteca.php';
    }

    public function autoevaluacion($id) {
        $CRUD = new CRUDlibrarti();
        $pregunta1 = $CRUD->pregunta1($id);
        $respuesta1 = $CRUD->pregunta1($id);
        $pregunta2 = $CRUD->pregunta2($id);
        $respuesta2 = $CRUD->pregunta2($id);
        $pregunta3 = $CRUD->pregunta3($id);
        $respuesta3 = $CRUD->pregunta3($id);
        $pregunta4 = $CRUD->pregunta4($id);
        $respuesta4 = $CRUD->pregunta4($id);
        $pregunta5 = $CRUD->pregunta5($id);
        $respuesta5 = $CRUD->pregunta5($id);
        $pregunta6 = $CRUD->pregunta6($id);
        $respuesta6 = $CRUD->pregunta6($id);
        $pregunta7 = $CRUD->pregunta7($id);
        $respuesta7 = $CRUD->pregunta7($id);
        $pregunta8 = $CRUD->pregunta8($id);
        $respuesta8 = $CRUD->pregunta8($id);
        require_once 'Vista/evaluacion.php';
    }

    public function documentolistado() {
        $CRUD = new CRUDlibrarti();
        $result = $CRUD->Documentolistados();
        require_once 'Vista/documento.php';
    }

    public function documentover($id) {
        $CRUD = new CRUDlibrarti();
        $result = $CRUD->Documentover($id);
        require_once 'Vista/documentover.php';
    }

    public function documentoagregar($tipo, $codigo, $titulo, $descripcion, $autor, $fechapublicacion, $documento) {
        $CRUD = new CRUDlibrarti();
        $resultdoc = $CRUD->Documentocantidad($codigo);
        $cantidaddoc = $resultdoc->num_rows;


        $archivo = $_FILES['documento']['name'];
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        if ($extension != "pdf") {
            echo '<script language="javascript">alert("El documento debe ser en extesion PDF");</script>';
            require_once 'Vista/documentonuevo.php';
        } else {

            if ($cantidaddoc != 0) {
                echo '<script language="javascript">alert("El codigo ya esta registrado");</script>';
                require_once 'Vista/documentonuevo.php';
            } else {
                $servidor = $_SERVER['DOCUMENT_ROOT'] . "/biblioteca/Documentos/";
                $destino = $servidor . $archivo; //RUTA DONDE SE ALAMCENA 
                $ruta = $_FILES['documento']['tmp_name'];
                $urlBD = "/biblioteca/Documentos/" . $archivo;
                copy($ruta, $destino);
                $documentoreg = new Documento(null, $tipo, $codigo, $titulo, $descripcion, $autor, $fechapublicacion, $urlBD);
                $CRUD->Documentoagregar($documentoreg);

                $resultid = $CRUD->ultimoDocumento();
                $iddocumento = 0;
                while ($fila = $resultid->fetch_object()) {
                    $iddocumento = $fila->docid;
                }

                for ($i = 1; $i <= 8; $i++) {
                    $pregunta = new Pregunta(null, $iddocumento, $i, "");
                    $CRUD->Preguntaagregar($pregunta);
                    for ($j = 1; $j <= 4; $j++) {
                        $respuesta = new Respuesta(null, $iddocumento, $i, $j, "", 0);
                        $CRUD->Respuestaagregar($respuesta);
                    }
                }

                echo '<script language="javascript">alert("Documento Registrado");</script>';
                require_once 'Vista/documentonuevo.php';
            }
        }

        //   
    }

    public function documentoactualizar($id, $tipo, $codigo, $titulo, $descripcion, $autor, $fechapublicacion, $documento) {
        $CRUD = new CRUDlibrarti();

        $archivo = $_FILES['nuevodocumento']['name'];
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);

        if ($archivo == "") {
            $documentoact = new Documento($id, $tipo, $codigo, $titulo, $descripcion, $autor, $fechapublicacion, $documento);
            $CRUD->Documentoactualizar($documentoact);
            echo '<script language="javascript">alert("Documento Actualizado Sin Adjuntadr");</script>';

            $result = $CRUD->Documentover($id);
            require_once 'Vista/documentover.php';
        } else {

            if ($extension != "pdf") {
                echo '<script language="javascript">alert("El documento debe ser en extesion PDF");</script>';
                $result = $CRUD->Documentover($id);
                require_once 'Vista/documentover.php';
            } else {

                $servidor = $_SERVER['DOCUMENT_ROOT'] . "/biblioteca/Documentos/";
                $destino = $servidor . $archivo; //RUTA DONDE SE ALAMCENA 
                $ruta = $_FILES['nuevodocumento']['tmp_name'];
                $urlBD = "/biblioteca/Documentos/" . $archivo;
                copy($ruta, $destino);
                $documentoact = new Documento($id, $tipo, $codigo, $titulo, $descripcion, $autor, $fechapublicacion, $urlBD);
                $CRUD->Documentoactualizar($documentoact);
                echo '<script language="javascript">alert("Documento Actualizado Adjuntado");</script>';
                $result = $CRUD->Documentover($id);
                require_once 'Vista/documentover.php';
            }
        }
    }

    
    public function documentoeliminar($id) {
        $CRUD = new CRUDlibrarti();
        $cancelar = $CRUD->DocumentoEliminar($id);
        $result = $CRUD->Documentolistados();
        require_once 'Vista/documento.php';
        
    }
    
    public function preguntaver($id) {
        $CRUD = new CRUDlibrarti();
        $resultdoc = $CRUD->Preguntaver($id);
        $result = $CRUD->Preguntaver($id);
        require_once 'Vista/pregunta.php';
    }

    public function preguntaactualizar($preid, $documento, $numero, $pregunta) {
        $CRUD = new CRUDlibrarti();
        $pregunta = new Pregunta($preid, $documento, $numero, $pregunta);
        $CRUD->Preguntaactualizar($pregunta);
        echo '<script language="javascript">alert("Pregunta actualizada");</script>';
        $resultdoc = $CRUD->Preguntaver($documento);
        $result = $CRUD->Preguntaver($documento);
        require_once 'Vista/pregunta.php';
    }

    public function respuestaver($documento, $pregunta) {
        $CRUD = new CRUDlibrarti();
        $resultdoc = $CRUD->Respuestaver($documento, $pregunta);
        $result = $CRUD->Respuestaver($documento, $pregunta);
        require_once 'Vista/respuesta.php';
    }

    public function respuestaactualizar($resid, $documento, $pregunta, $numero, $respuesta, $solucion) {
        $CRUD = new CRUDlibrarti();

        $resultres = $CRUD->Respuestacantidad($documento, $pregunta);
        $cantidadres = $resultres->num_rows;

        $respuestaing = new Respuesta($resid, $documento, $pregunta, $numero, $respuesta, $solucion);
        $CRUD->Respuestaactualizar($respuestaing);
        echo '<script language="javascript">alert("Respuesta Actualizada");</script>';
        $resultdoc = $CRUD->Respuestaver($documento, $pregunta);
        $result = $CRUD->Respuestaver($documento, $pregunta);
        require_once 'Vista/respuesta.php';
    }

    public function autoevaluacionevaluar($id, $r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8) {
        $CRUD = new CRUDlibrarti();

        if ($r1 == "" || $r2 == "" || $r3 == "" || $r4 == "" || $r5 == "" || $r6 == "" || $r7 == "" || $r8 == "") {
            echo '<script language="javascript">alert("Todos los campos son obligatorios");</script>';

            $CRUD = new CRUDlibrarti();
            $pregunta1 = $CRUD->pregunta1($id);
            $respuesta1 = $CRUD->pregunta1($id);
            $pregunta2 = $CRUD->pregunta2($id);
            $respuesta2 = $CRUD->pregunta2($id);
            $pregunta3 = $CRUD->pregunta3($id);
            $respuesta3 = $CRUD->pregunta3($id);
            $pregunta4 = $CRUD->pregunta4($id);
            $respuesta4 = $CRUD->pregunta4($id);
            $pregunta5 = $CRUD->pregunta5($id);
            $respuesta5 = $CRUD->pregunta5($id);
            $pregunta6 = $CRUD->pregunta6($id);
            $respuesta6 = $CRUD->pregunta6($id);
            $pregunta7 = $CRUD->pregunta7($id);
            $respuesta7 = $CRUD->pregunta7($id);
            $pregunta8 = $CRUD->pregunta8($id);
            $respuesta8 = $CRUD->pregunta8($id);
            require_once 'Vista/evaluacion.php';
        } else {
            $r1;
            $r2;
            $r3;
            $r4;
            $r5;
            $r6;
            $r7;
            $r8;
            require_once 'Vista/evaluacionrespuesta.php';
        }
    }

    public function comentario($id) {
        $CRUD = new CRUDlibrarti();
        $resultdoc = $CRUD->Documentover($id);
        $resultcom = $CRUD->Comentariover($id);
        require_once 'Vista/comentario.php';
    }

    public function comentarioagregar($documento, $comentario) {
        $CRUD = new CRUDlibrarti();
        date_default_timezone_set('America/Bogota');
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        $comentarioag = new Comentario(null, $documento, $comentario, $fecha, $hora, null);
        $CRUD->Comentarioagregar($comentarioag);
        echo '<script language="javascript">alert("Comentario Registrado");</script>';

        $resultdoc = $CRUD->Documentover($documento);
        $resultcom = $CRUD->Comentariover($documento);
        require_once 'Vista/comentario.php';
    }
    
    
     public function configuracionactualizar($usuario, $contrasena) {
        $CRUD = new CRUDlibrarti();
        $admin = new Admin(1, $usuario, $contrasena);
        $CRUD->Configuraractualizar($admin);
        echo '<script language="javascript">alert("Configuracion actualizada");</script>';
         require_once 'Vista/configurar.php';
    }

}

?>
