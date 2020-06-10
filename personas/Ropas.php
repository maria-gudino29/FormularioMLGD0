<?php
/**
 * 
 */
class Ropas
{
	public $nombre;
	public $tipo;
	public $estilo;
	public $uso;
	public $materiales;
	function __construct($nombre,$tipo,$estilo,$uso,$materiales)
	{
		$this->nombre=$nombre;
		$this->tipo=$tipo;
		$this->estilo=$estilo;
		$this->uso=$uso;
		$this->materiales=$materiales;
	}
	public function vender($precio){
   	if ($precio==25) {
   		return "vender" .$precio;
   	} else {
   		return "no vender" .$precio;
   	}
} 
}

class pantalon extends Ropas

{public $nombre;
	public $marca;
	public $talla;
	public $color;
	public $precio;
	function __construct($nombre,$tipo,$estilo,$uso,$materiales)
	{
		$this->marca=$marca;
		$this->talla=$talla;
		$this->color=$color;
		$this->precio=$precio;
	}
}