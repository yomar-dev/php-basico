<?php 

class Camion extends VehiculoBase{
	private $numLlantas;

	public function __construct($color, $numLlantas){
		$this->numLlantas = $numLlantas;
		parent::__construct($color);
	}

	public function mover(){
		echo "Camion en movimiento<br>";
		echo "<strong>Num. Llantas: </strong>" . $this->numLlantas . "<br>";
	}
}



?>