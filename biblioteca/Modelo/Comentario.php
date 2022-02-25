<?php
Class Comentario{
    private $comid;
    private $documento;
    private $comentario;
    private $fecha;
    private $hora;
    private $dni;
  
    function __construct($comid, $documento, $comentario, $fecha, $hora, $dni) {
        $this->comid = $comid;
        $this->documento = $documento;
        $this->comentario = $comentario;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->dni = $dni;
    }

    function getComid() {
        return $this->comid;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getComentario() {
        return $this->comentario;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function getDni() {
        return $this->dni;
    }




}
?>


