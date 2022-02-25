<?php

class CRUDlibrarti {

    public function consultarLoginestudioante($usu, $contr) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM estudiante WHERE dni = '$usu' AND contrasena = '$contr' ";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function consultarLoginAdmin($usu, $contr) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM administrador WHERE usuario = '$usu' AND contrasena = '$contr' ";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function mostrarCarrera() {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM carrera ORDER BY carrera ASC";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function mostrarSede() {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM sedes ORDER BY sede ASC";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Estudiantemostrar() {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT estid, dni, nombre, apellido, celular, correo, carrera.carrera AS carrera, sedes.sede AS sede, contrasena FROM estudiante,carrera, sedes WHERE estudiante.carrera = carrera.carid AND estudiante.sede = sedes.sedid ORDER BY estid DESC;";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Estudiantecantidad($dni) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM estudiante WHERE dni = '" . $dni . "'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        return $result;
    }

    public function Estudianteagregar(Estudiante $est) {
        $conexion = new Conexion();
        $conexion->abrir();
        $dni = $est->getDni();
        $nombre = $est->getNombre();
        $apellido = $est->getApellido();
        $celular = $est->getCelular();
        $correo = $est->getCorreo();
        $carrera = $est->getCarrera();
        $sede = $est->getSede();
        $contrasena = $est->getContrasena();

        $sql = "INSERT INTO estudiante VALUES (null,'$dni','$nombre','$apellido','$celular','$correo','$carrera','$sede','$contrasena')";
        $conexion->consulta($sql);
        $citaId = $conexion->obtenerId();
        $conexion->cerrar();
        return $citaId;
    }

    public function Estudianteeliminar($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "DELETE FROM estudiante WHERE estid =" . $id;
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }

    public function Estudiantever($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM estudiante WHERE estid =" . $id;
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Estudianteactualizar(Estudiante $est) {
        $conexion = new Conexion();
        $conexion->abrir();
        $id = $est->getEstid();
        $dni = $est->getDni();
        $nombre = $est->getNombre();
        $apellido = $est->getApellido();
        $celular = $est->getCelular();
        $correo = $est->getCorreo();
        $carrera = $est->getCarrera();
        $sede = $est->getSede();
        $contrasena = $est->getContrasena();
        $sql = "UPDATE estudiante SET dni='$dni', nombre='$nombre', apellido='$apellido',celular='$celular',correo='$correo',carrera='$carrera',sede='$sede',contrasena='$contrasena' WHERE estid = $id";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }

    public function ultimoDocumento() {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT docid FROM documento ORDER BY docid DESC LIMIT 1;";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Documentolistados() {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM documento ORDER BY docid DESC;";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Documentocantidad($codigo) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM documento WHERE codigo = '" . $codigo . "'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        return $result;
    }

    public function Documentover($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM documento WHERE docid =" . $id;
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Documentoagregar(Documento $doc) {
        $conexion = new Conexion();
        $conexion->abrir();
        $tipo = $doc->getTipo();
        $codigo = $doc->getCodigo();
        $titulo = $doc->getTitulo();
        $descripcion = $doc->getDescripcion();
        $autor = $doc->getAutor();
        $fechapublicacion = $doc->getFechapublicacion();
        $documento = $doc->getDocumento();
        $sql = "INSERT INTO documento VALUES (null,'$tipo','$codigo','$titulo','$descripcion','$autor','$fechapublicacion','$documento')";
        $conexion->consulta($sql);
        $citaId = $conexion->obtenerId();
        $conexion->cerrar();
        return $citaId;
    }

    public function Documentoactualizar(Documento $doc) {
        $conexion = new Conexion();
        $conexion->abrir();
        $id = $doc->getDocid();
        $tipo = $doc->getTipo();
        $codigo = $doc->getCodigo();
        $titulo = $doc->getTitulo();
        $descripcion = $doc->getDescripcion();
        $autor = $doc->getAutor();
        $fechapublicacion = $doc->getFechapublicacion();
        $documento = $doc->getDocumento();
        $sql = "UPDATE documento SET tipo='$tipo', codigo='$codigo', titulo='$titulo',descripcion='$descripcion',autor='$autor',fechapublicacion='$fechapublicacion',documento='$documento' WHERE docid = $id";
        $conexion->consulta($sql);
        $citaId = $conexion->obtenerId();
        $conexion->cerrar();
        return $citaId;
    }

    public function DocumentoEliminar($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "DELETE FROM documento WHERE docid = $id ";
        $conexion->consulta($sql);

        $sql2 = "DELETE FROM pregunta WHERE iddocumento = $id ";
        $conexion->consulta($sql2);

        $sql3 = "DELETE FROM respuesta WHERE iddocumento = $id ";
        $conexion->consulta($sql3);

        $sql4 = "DELETE FROM comentario WHERE iddocumento = $id ";
        $conexion->consulta($sql4);

        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }

    public function Preguntaagregar(Pregunta $pre) {
        $conexion = new Conexion();
        $conexion->abrir();
        $documento = $pre->getDocumento();
        $numero = $pre->getNumero();
        $pregunta = $pre->getPregunta();
        $sql = "INSERT INTO pregunta VALUES (null,'$documento','$numero','$pregunta')";
        $conexion->consulta($sql);
        $citaId = $conexion->obtenerId();
        $conexion->cerrar();
        return $citaId;
    }

    public function Respuestacantidad($documento, $pregunta) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM respuesta WHERE iddocumento =" . $documento . " AND idpregunta = " . $pregunta . " AND solucion = 1";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        return $result;
    }

    public function Respuestaver($documento, $pregunta) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM respuesta, documento WHERE iddocumento =" . $documento . "  AND docid = " . $documento . "  AND idpregunta = " . $pregunta;
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Respuestaagregar(Respuesta $res) {
        $conexion = new Conexion();
        $conexion->abrir();
        $documento = $res->getDocumento();
        $pregunta = $res->getPregunta();
        $numero = $res->getNumero();
        $respuesta = $res->getRespuesta();
        $solucion = $res->getSolucion();

        $sql = "INSERT INTO respuesta VALUES (null,'$documento','$pregunta','$numero','$respuesta','$solucion')";
        $conexion->consulta($sql);
        $citaId = $conexion->obtenerId();
        $conexion->cerrar();
        return $citaId;
    }

    public function Preguntaver($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM  pregunta, documento  WHERE iddocumento = $id AND docid =" . $id;
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function pregunta1($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 1 AND respuesta.idpregunta = 1;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function pregunta2($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 2 AND respuesta.idpregunta = 2;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function pregunta3($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 3 AND respuesta.idpregunta = 3;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function pregunta4($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, pregunta.iddocumento as iddocumento, respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 4 AND respuesta.idpregunta = 4;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function pregunta5($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, pregunta.iddocumento as iddocumento, respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 5 AND respuesta.idpregunta = 5;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function pregunta6($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, pregunta.iddocumento as iddocumento, respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 6 AND respuesta.idpregunta = 6;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function pregunta7($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 7 AND respuesta.idpregunta = 7;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function pregunta8($documento) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pregunta.iddocumento as iddocumento, pregunta.iddocumento as iddocumento,respuesta.numero as numero, respuesta, pregunta, solucion FROM respuesta,pregunta WHERE pregunta.iddocumento = '$documento' AND respuesta.iddocumento = '$documento' AND pregunta.numero = 8 AND respuesta.idpregunta = 8;";
        $conexion->consulta($sql);
        $result1 = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result1;
    }

    public function Preguntaactualizar(Pregunta $pre) {
        $conexion = new Conexion();
        $conexion->abrir();
        $id = $pre->getPreid();
        $pregunta = $pre->getPregunta();
        $sql = "UPDATE pregunta SET pregunta='$pregunta' WHERE preid = $id";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }

    public function Respuestaactualizar(Respuesta $res) {
        $conexion = new Conexion();
        $conexion->abrir();
        $id = $res->getResid();
        $documento = $res->getDocumento();
        $pregunta = $res->getPregunta();
        $numero = $res->getNumero();
        $respuesta = $res->getRespuesta();
        $solucion = $res->getSolucion();

        $sql = "UPDATE respuesta SET respuesta='$respuesta',solucion = '$solucion' WHERE resid = $id";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }

    public function Comentariover($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM comentario WHERE iddocumento = '$id' ORDER BY comid DESC";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function Comentarioagregar(Comentario $com) {
        $conexion = new Conexion();
        $conexion->abrir();
        $documento = $com->getDocumento();
        $comentario = $com->getComentario();
        $fecha = $com->getFecha();
        $hora = $com->getHora();


        $sql = "INSERT INTO comentario VALUES (null,'$documento','$comentario','$fecha','$hora', null)";
        $conexion->consulta($sql);
        $citaId = $conexion->obtenerId();
        $conexion->cerrar();
        return $citaId;
    }
    
    public function Configuraractualizar(Admin $adm) {
        $conexion = new Conexion();
        $conexion->abrir();
        $id = $adm->getAdid();
        $usuario = $adm->getUsuario();
        $contrasena = $adm->getContrasena();
        $sql = "UPDATE administrador SET usuario='$usuario',contrasena = '$contrasena' WHERE adid = 1";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }


}
?>


