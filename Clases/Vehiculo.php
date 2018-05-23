<?php
    class Vehiculo{

        private $color;
        private $estado;
        private $marca;
        private $modelo;
        private $patente;

        public function __construct($patente,$marca,$modelo,$color,$estado){
            $this->patente = $patente;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
            $this->estado = $estado;
        }

        function getColor(){
            return $this->color;
        }

        function setColor($value){
            $this->color = $value;
        }
        
        function getEstado(){
            return $this->estado;
        }

        function setEstado($value){
            $this->estado = $value;
        }
        
        function getMarca(){
            return $this->marca;
        }

        function setMarca($value){
            $this->marca = $value;
        }
        
        function getModelo(){
            return $this->modelo;
        }

        function setModelo($value){
            $this->modelo = $value;
        }
        
        function getPatente(){
            return $this->patente;
        }

        function setPatente($value){
            $this->patente = $value;
        }
    }
?>