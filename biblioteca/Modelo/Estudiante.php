<?php

class Estudiante {

    private $estid;
    private $dni;
    private $nombre;
    private $apellido;
    private $celular;
    private $correo;
    private $carrera;
    private $sede;
    private $contrasena;

    function __construct($estid, $dni, $nombre, $apellido, $celular, $correo, $carrera, $sede, $contrasena) {
        $this->estid = $estid;
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->celular = $celular;
        $this->correo = $correo;
        $this->carrera = $carrera;
        $this->sede = $sede;
        $this->contrasena = $contrasena;
    }

    function getEstid() {
        return $this->estid;
    }

    function getDni() {
        return $this->dni;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCelular() {
        return $this->celular;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getCarrera() {
        return $this->carrera;
    }

    function getSede() {
        return $this->sede;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function setEstid($estid) {
        $this->estid = $estid;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setCarrera($carrera) {
        $this->carrera = $carrera;
    }

    function setSede($sede) {
        $this->sede = $sede;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

}

?>