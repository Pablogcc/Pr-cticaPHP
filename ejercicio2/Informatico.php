<?php

require_once 'Persona.php';

class Informatico extends Persona {

    public $lenguajes;
    public $experienciaProgramador;
    
    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador) {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador  = $experienciaProgramador;
    }

    public function getLenguajes() {
        return $this->lenguajes;
    }

    public function getExperienciaProgramador() {
        return $this->experienciaProgramador;
    }

    public function setLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
    }

    public function setExperienciaProgramador($experienciaProgramador) {
        $this->experienciaProgramador = $experienciaProgramador;
    }

    public function programar(){
        echo "Se está programando el ordenador";
    }

    public function repararOrdenador() {
        echo "Se está reparando el ordenador";
    }

    public function hacerOfimatica() {
        echo "Se está haciendo la ofimática";
    }

}