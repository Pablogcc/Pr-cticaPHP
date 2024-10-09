<?php

require_once 'Clases/Persona.php';
require_once 'Clases/Informatico.php';
require_once 'Clases/Tecnicoredes.php';

$tecnico = new Tecnicoredes("Juan", "Pérez", 1.75, 30, "PHP", 5, "Viva auditar php", 3);

echo "Instancia de Tecnicoredes creada:\n";
echo "Nombre: " . $tecnico->getNombre() . "\n";
echo "Apellido: " . $tecnico->getApellido() . "\n";
echo "Altura: " . $tecnico->getAltura() . " m\n";
echo "Edad: " . $tecnico->getEdad() . " años\n";
echo "Lenguajes conocidos: " . implode(", ", $tecnico->getLenguajes()) . "\n";
echo "Experiencia como programador: " . $tecnico->getExperienciaProgramador() . " años\n";
echo "Auditar redes: " . $tecnico->getAuditarredes() . "\n";
echo "Experiencia en redes: " . $tecnico->getExperienciaredes() . " años\n";
