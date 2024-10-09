<?php


class Coche {
    
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plaza) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plaza;
    }

    public function getColor() {
        return $this->color;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function getCaballaje() {
        return $this->caballaje;
    }

    public function getPlazas() {
        return $this->plazas;
    }
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }

    public function setCaballaje($caballaje) {
        $this->caballaje = $caballaje;
    }

    public function setPlazas($plazas) {
        $this->plazas = $plazas;
    }

//Función para acelerar
    public function acelerar() {
        $this->velocidad++;
    }

    //Función para frenar
    public function frenar() {
        if ($this->velocidad > 0) {
            $this->velocidad--;
        }
    }

    //Aquí mostramos la velocidad
    public function mostrarVelocidad() {
        return "La velocidad que tienes ahora es " . $this->velocidad . "km/h";
    }


    public function mostrarCoche($coches){
        // Para comprobar si $coches es un objeto o no
        if($coches instanceof Coche){
        echo "El color es: " . $coches->color . "\n";
        echo "El modelo es: " . $coches->modelo . "\n";
        echo "El marca es: " . $coches->marca . "\n";
        echo "La velocidad es: " . $coches->velocidad . "\n";
        echo "El caballaje es: " . $coches->caballaje . "\n";
        echo "Las plazas es: " . $coches->plazas . "\n";

         } else{
            echo "Esto no es un coche ni es nada";
         }
    }
    
}

//Esto sirve para añadir coches con sus atributos
$coche = new Coche("Amarillo ", "Renault ", "Clio ", 150 , 200 , 5 );
$coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);
$coche2 = new Coche("Azul", "Citroen", "Xara", 100, 220, 4);
$coche3 = new Coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);

// Esto sirve para cambiar cosas
$coche->color = "ROSA"; 
$coche->setMarca("Audi"); 
echo $coche->mostrarCoche("HOLA MUNDO DESDE UN METODO");


//Esto es para que se muestren por pantalla
var_dump($coche->getModelo());
var_dump($coche);
var_dump($coche1);
var_dump($coche2);
var_dump($coche3);
