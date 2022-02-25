<?php
require_once 'Modelo/Conexion.php';
require_once 'Controlador/Controlador.php';
require_once 'Modelo/Estudiante.php';
require_once 'Modelo/Pregunta.php';
require_once 'Modelo/Respuesta.php';
require_once 'Modelo/Documento.php';
require_once 'Modelo/Comentario.php';
require_once 'Modelo/Admin.php';
require_once 'Modelo/CRUDlibrarti.php';

$controlador = new Controlador();
if (isset($_GET["accion"])) {
    
     if ($_GET["accion"] == "estudiantes") {
        $controlador->estudiantelistar();
    }elseif ($_GET["accion"] == "estudiantenuevo") {
        $controlador->estudiantenuevo();
    }  elseif ($_GET["accion"] == "estudianteguardar") {
        $controlador->estudianteagregar($_POST["dni"], $_POST["nombre"], $_POST["apellido"], $_POST["celular"], $_POST["correo"], $_POST["carrera"], $_POST["sede"],$_POST["contrasena"]);
    } elseif ($_GET["accion"] == "estudiantever") {
        $controlador->estudiantever($_GET["id"]);
    }elseif ($_GET["accion"] == "estudianteactualizar") {
        $controlador->estudianteactualizar($_POST["id"],$_POST["dni"], $_POST["nuevodni"], $_POST["nombre"], $_POST["apellido"], $_POST["celular"], $_POST["correo"], $_POST["carrera"], $_POST["sede"],$_POST["contrasena"]);
    } elseif ($_GET["accion"] == "estudianteeliminar") {
        $controlador->estudianteeliminar($_POST["id"]);
    }
    
    if ($_GET["accion"] == "documento") {
        $controlador->documentolistado();
    }elseif ($_GET["accion"] == "documentonuevo") {
        $controlador->verPagina('Vista/documentonuevo.php');
    } elseif ($_GET["accion"] == "documentoguardar") {
        $controlador->documentoagregar($_POST["tipo"], $_POST["codigo"], $_POST["titulo"], $_POST["descripcion"], $_POST["autor"], $_POST["fechapublicacion"], $_POST["documento"]);
    }  elseif ($_GET["accion"] == "documentover") {
        $controlador->documentover($_GET["id"]);
    }elseif ($_GET["accion"] == "documentoactualizar") {
        $controlador->documentoactualizar($_POST["id"],$_POST["tipo"], $_POST["codigo"], $_POST["titulo"], $_POST["descripcion"], $_POST["autor"], $_POST["fechapublicacion"], $_POST["documento"]);
    } elseif ($_GET["accion"] == "documentoeliminar") {
        $controlador->documentoeliminar($_POST["id"]);
    }
    elseif ($_GET["accion"] == "administrador") {
        $controlador->verAdministrador();
    }
    
    
    
    if ($_GET["accion"] == "preguntaver") {
        $controlador->preguntaver($_GET["id"]); // iddocumento
    }elseif ($_GET["accion"] == "preguntaactualizar") {
        $controlador->preguntaactualizar($_POST["id"], $_POST["iddocumento"], $_POST["numero"], $_POST["pregunta"]);
    }
    
    if ($_GET["accion"] == "respuestaver") {
        $controlador->respuestaver($_GET["id"],$_GET["pre"]); // iddocumento,id pregunta
    }elseif ($_GET["accion"] == "respuestaactualizar") {
        $controlador->respuestaactualizar($_POST["id"], $_POST["iddocumento"], $_POST["pregunta"], $_POST["numero"], $_POST["respuesta"],$_POST["solucion"]);
    }
    
    if ($_GET["accion"] == "biblioteca") {
        $controlador->biblioteca();
    }else if($_GET["accion"] == "autoevaluarme") {
        $controlador->autoevaluacion($_GET["id"]); // iddocumento,id pregunta
    }elseif ($_GET["accion"] == "evaluar") {
        $controlador->autoevaluacionevaluar($_POST["id"], $_POST["PR_1"], $_POST["PR_2"],  $_POST["PR_3"], $_POST["PR_4"], $_POST["PR_5"], $_POST["PR_6"], $_POST["PR_7"], $_POST["PR_8"]);
    }
    
    
    if($_GET["accion"] == "comentario") {
        $controlador->comentario($_GET["id"]); // iddocumento,id pregunta
    }elseif ($_GET["accion"] == "comentarioagregar") {
        $controlador->comentarioagregar($_POST["id"], $_POST["comentario"]);
    }
    
    if  ($_GET["accion"] == "login") {
        $controlador->Login($_POST["usuario"], $_POST["contrasena"],$_POST["tipo"]);
    }else if ($_GET["accion"] == "salir") {
        $controlador->verPagina('Vista/index.php');
    } elseif ($_GET["accion"] == "configuracion") {
        $controlador->verPagina('Vista/configurar.php');
    }elseif ($_GET["accion"] == "configuracionactualizar") {
        $controlador->configuracionactualizar($_POST["usuario"], $_POST["contrasena"]);
    }

} else {

    $controlador->verPagina('Vista/index.php');
}
?>

