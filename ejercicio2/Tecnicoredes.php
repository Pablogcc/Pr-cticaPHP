<?php

require_once 'Informatico.php';

class Tecnicoredes extends Informatico {

    public $auditarredes;
    public $expienciaredes;


    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador, $auditarredes, $expienciaredes){    
        parent::__construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador);
    $this->auditarredes = $auditarredes;
    $this->expienciaredes =$expienciaredes;
    }

    public function getAuditarredes() {
        return $this->auditarredes;
    }

    public function getExperienciaredes() {
        return $this->expienciaredes;
    }

    public function setAuditarredes($auditarredes) {
        $this->auditarredes = $auditarredes;
    }

    public function setExperienciaredes($expienciaredes) {
        $this->expienciaredes = $expienciaredes;
    }

    public function auditaredes() {
        echo "Auditoría de redes realizada: " . $this->auditarredes;
    }
}