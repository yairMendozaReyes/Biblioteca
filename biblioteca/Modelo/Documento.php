<?php

Class Documento{
    
    private $docid;
    private $tipo;
    private $codigo;
    private $titulo;
    private $descripcion;
    private $autor;
    private $fechapublicacion;
    private $documento;
    
    
    function __construct($docid, $tipo, $codigo, $titulo, $descripcion, $autor, $fechapublicacion, $documento) {
        $this->docid = $docid;
        $this->tipo = $tipo;
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->descripción = $descripcion;
        $this->autor = $autor;
        $this->fechapublicacion = $fechapublicacion;
        $this->documento = $documento;
    }
    
    function getDocid() {
        return $this->docid;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripción;
    }

    function getAutor() {
        return $this->autor;
    }

    function getFechapublicacion() {
        return $this->fechapublicacion;
    }

    function getDocumento() {
        return $this->documento;
    }



}

?>