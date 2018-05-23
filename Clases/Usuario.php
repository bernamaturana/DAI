<?php

class Usuario {

    private $idUsuario;
    private $password;
    private $realname;
    private $username;
    private $tipoUsuario;

    function __construct($id,$pass,$name,$usern,$tipo){
        $this->idUsuario = $id;
        $this->password=$pass;
        $this->realname=$name;
        $this->username=$usern;
        $this->tipoUsuario=$tipo;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($value){
        $this->idUsuario = $value;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($value){
        $this->password = $value;
    }

    public function getRealname(){
        return $this->realname;
    }

    public function setRealname($value){
        $this->realname = $value;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($value){
        $this->username = $value;
    }

    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }

    public function setTipoUsuario($value){
        $this->tipoUsuario = $value;
    }
}
?>