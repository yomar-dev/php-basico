<?php 

class Carro{
	
	private $propietario = "Judie";

	public function mover(){
		echo "Carro en movimiento<br>";
	}

	public function getPropietario(){
		return $this->propietario;
	}
}


echo "<h3>Clase Carro</h3>";

$miCarro = new Carro();
$miCarro->mover();
echo "<strong>Propietario:</strong>" . $miCarro->getPropietario();

?>