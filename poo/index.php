<?php 

class Carro{
	
	public $propietario;

	public function mover(){
		echo "Carro en movimiento<br>";
	}
}


echo "<h3>Clase Carro</h3>";

$miCarro = new Carro();
$miCarro->mover();

?>