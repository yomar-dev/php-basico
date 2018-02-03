<?php 

class VehiculoBase{
	
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



?>