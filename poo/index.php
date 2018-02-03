<?php 

class Carro{
	
	private $propietario;

	public function mover(){
		echo "Carro en movimiento<br>";
	}
}


echo "<h3>Clase Carro</h3>";

$miCarro = new Carro();
$miCarro->mover();
$miCarro->propietario = "Roxanne";
echo "<strong>Propietario:</strong>" . $miCarro->propietario;

?>