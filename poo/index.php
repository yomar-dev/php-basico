<?php 

class Vehiculo{
	
	private $propietario;
	private $color;	

	public function __construct($color){
		$this->color = $color;
	}

	public function mover(){
		echo "Vehiculo en movimiento<br>";
	}

	public function getPropietario(){
		return $this->propietario;
	}

	public function setPropietario($nombre){
		$this->propietario = $nombre;
	}

	public function getColor(){
		return $this->color;
	}
}


class Carro extends Vehiculo{
	public function mover(){
		echo "Carro en movimiento<br>";
	}
}

class Camion extends Vehiculo{
	public function mover(){
		echo "Camion en movimiento<br>";
	}
}


echo "<h3>Clase Carro</h3>";

$miCarro = new Carro("Negro");
$miCarro->mover();
$miCarro->setPropietario("Cody");
echo "<strong>Propietario: </strong>" . $miCarro->getPropietario();
echo "<br><strong>Color: </strong>" . $miCarro->getColor();


echo "<h3>Clase Camion</h3>";

$miCamion = new Camion("Blanco");
$miCamion->mover();
$miCamion->setPropietario("Miguelina");
echo "<strong>Propietario: </strong>" . $miCamion->getPropietario();
echo "<br><strong>Color: </strong>" . $miCamion->getColor();
?>