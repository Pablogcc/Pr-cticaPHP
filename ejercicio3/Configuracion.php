<?php

    class Configuracion{
    public static $color;
    public static $newsletter;
    public static $entorno;
    
    public function __construct($color, $newsletter, $entorno) {
        $this->color = $color;
        $this->newsletter = $newsletter;
        $this->entorno = $entorno;
    }

    public function getColor() {
        return $this->color;
    }

    public function getNewsletter() {
        return $this->newsletter;
    }

    public function getEntorno() {
        return $this->entorno;
    }

    // Setter para color
    public function setColor($valor) {
        $this->color = $valor;
    }

    // Getter para newsletter
    

    // Setter para newsletter
    public function setNewsletter($valor) {
        $this->newsletter = $valor;
    }

    // Getter para entorno
    

    // Setter para entorno
    public function setEntorno($valor) {
        $this->entorno = $valor;
    }

    public function mostrarConfiguracion() {
        echo "Color: " . $this->color . "\n";
        echo "Newsletter: " . $this->newsletter . "\n";
        echo "Entorno: " . $this->entorno . "\n";
    }

    }