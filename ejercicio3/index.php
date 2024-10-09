<?php

require_once 'Configuracion.php';


$configuracion = new Configuracion("Rojo", true, "Producción");


$configuracion->mostrarConfiguracion();