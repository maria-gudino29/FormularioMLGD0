<?php
	//Definamos la clase

class muestra_casa
{
	//atributos
	public $modelo;
	public $estado;
	public $plantas = 2;
	public $vestibulo;
	public $comedor;
	public $sala;
	public $cocina;
	public $baños = 3;
	public $habitaciones = 4;
	public $terraza;
	public $precio = 100.00 dolares;

	//Constructor
	function __construct($modelo,$estado,$plantas= 2,$vestibulo,$comedor,$sala,$cocina,$baños = 3,$habitaciones = 4,$terraza,$precio= 100.00 dolares)
	{
		$this->modelo = $modelo;
		$this->estado = $estado;
		$this->plantas $plantas;
		$this->vestibulo = $vestibulo;
		$this->comedor = $comedor;
		$this->sala = $sala;
		$this->cocina = $cocina;
		$this->baños = $baños;
		$this->habitaciones = $habitaciones;
		$this->terraza = $terraza;
		$this->precio = $precio;
	}
}
function hacer_oferta($precio){
   	if ($precio>100.00 dolares) {
   		echo "Aceptar oferta" .$precio;
   	} else {
   		echo "rechazar oferta" .$precio;
   	}
} 
//el usuario introducirá un precio de oferta, dentro del cual se va a comparar con el precio de venta, se adará un precio límite dentro de la función, dependiendo cuantop oferte el cliente, la casa en venta es suya o no.

?>
 