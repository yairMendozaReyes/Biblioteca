<?php
Class Pregunta{
    private $preid;
    private $documento;
    private $numero;
    private $pregunta;
    
    function __construct($preid, $documento, $numero, $pregunta) {
        $this->preid = $preid;
        $this->documento = $documento;
        $this->numero = $numero;
        $this->pregunta = $pregunta;
    }

        function getPreid() {
        return $this->preid;
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



}
?>


