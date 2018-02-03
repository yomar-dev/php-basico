<?php 

class Carro{
	
	private $propietario;
	private $color;	

	public function __construct($color){
		$this->color = $color;
	}

	public function mover(){
		echo "Carro en movimiento<br>";
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


echo "<h3>Clase Carro</h3>";

$miCarro = new Carro("Negro");
$miCarro->mover();
$miCarro->setPropietario("Cody");
echo "<strong>Propietario: </strong>" . $miCarro->getPropietario();
echo "<br><strong>Color: </strong>" . $miCarro->getColor();

?>