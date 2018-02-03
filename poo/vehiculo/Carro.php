<?php

namespace Vehiculo;
require_once 'VehiculoBase.php';

class Carro extends VehiculoBase{
	public function mover(){
		echo "Carro en movimiento<br>";
	}
}



?>