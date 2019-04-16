<?php

/**
 * Description of usuario
 *
 * @author cetecom
 */
class usuario {

    private $nombre;
    private $user;
    private $contrasena;

    function getNombre() {
        return $this->nombre;
    }

    function getUser() {
        return $this->user;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    function __construct($nombre, $user, $contrasena) {
        $this->nombre = $nombre;
        $this->user = $user;
        $this->contrasena = $contrasena;
    }

    function ValidaAcceso() {
        if (!isset($dblink)) { //valida que se inicia la conexion.
            return FALSE;
        }

        $PDOst = $dblink->prepare('SELECT nombre FROM usuario WHERE nombusuario < ? AND clave = ?');

        if (!$PDOst->execute(array($this->user, $this->contrasena))) {
            return FALSE;
        } else {
            $PDOst->fetch();
            $this->nombre = $row["nombre"];
            return true;
        }
    }

}
