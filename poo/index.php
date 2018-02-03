<?php 

class Carro{
	
	private $propietario;

	public function mover(){
		echo "Carro en movimiento<br>";
	}

	public function getPropietario(){
		return $this->propietario;
	}

	public function setPropietario($nombre){
		$this->propietario = $nombre;
	}
}


echo "<h3>Clase Carro</h3>";

$miCarro = new Carro();
$miCarro->mover();
$miCarro->setPropietario("Cody");
echo "<strong>Propietario: </strong>" . $miCarro->getPropietario();

?>