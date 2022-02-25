<?php
Class Respuesta{
    private $resid;
    private $documento;
    private $pregunta;
    private $numero;
    private $respuesta;
    private $solucion;
    
    function __construct($resid, $documento, $pregunta, $numero, $respuesta, $solucion) {
        $this->resid = $resid;
        $this->documento = $documento;
        $this->pregunta = $pregunta;
        $this->numero = $numero;
        $this->respuesta = $respuesta;
        $this->solucion = $solucion;
    }

        function getResid() {
        return $this->resid;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getPregunta() {
        return $this->pregunta;
    }
    function getNumero() {
        return $this->numero;
    }

    
    function getRespuesta() {
        return $this->respuesta;
    }

    function getSolucion() {
        return $this->solucion;
    }


}
?>


