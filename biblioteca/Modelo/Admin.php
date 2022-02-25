<?php
Class Admin{
    private $adid;
    private $usuario;
    private $contrasena;
   
    function __construct($adid, $usuario, $contrasena) {
        $this->adid = $adid;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
    }
    
    function getAdid() {
        return $this->adid;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getContrasena() {
        return $this->contrasena;
    }




}
?>


