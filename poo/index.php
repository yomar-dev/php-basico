<?php 

include 'vehiculo/Carro.php';
include 'vehiculo/Camion.php';

use Vehiculo\{Carro, Camion};

echo "<h3>Clase Carro</h3>";

$miCarro = new Carro("Negro");
$miCarro->mover();
$miCarro->setPropietario("Cody");
echo "<strong>Propietario: </strong>" . $miCarro->getPropietario();
echo "<br><strong>Color: </strong>" . $miCarro->getColor();


echo "<h3>Clase Camion</h3>";

$miCamion = new Camion("Blanco", 16);
$miCamion->mover();
$miCamion->setPropietario("Miguelina");
echo "<strong>Propietario: </strong>" . $miCamion->getPropietario();
echo "<br><strong>Color: </strong>" . $miCamion->getColor();
?>