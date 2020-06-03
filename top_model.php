<?php

//Una modelo es aspirante a firmar para una marca muy famosa como es Victoria's Secrets. Para ser contratada, debe tener un minimo de 5 años de experiencia, medir más de 1,70 metros de estatura, su peso no puede ser mayor a los 50 kg, y las medidas deben ser menores a 90, 60, 90 cm. Evaluar si la modelo aspirante cuenta con los requicitos para formar parte de la firma de la marca Victoria's Secrets.

//definir clase

class top_model

{
	//atributos
	public $pais;
	public $nombre;
	public $apellido;
	public $estatura;
	public $medidas;
	public $peso;
	public $color_ojos;
	public $color_cabello;
	public $experiencia;

	//constructor
	function __construct($pais,$nombre,$apellido,$estatura,$medidas,$peso,$color_ojos,$color_cabello,$experiencia)
	{
	$this->pais= $pais;
	$this->nombre= $nombre;
	$this->apellido= $apellido;
	$this->estatura= $estatura;
	$this->medidas= $medidas;
	$this->peso = $peso;
	$this->color_ojos = $color_ojos;
	$this->color_cabello = $color_cabello;
//funciones
}
function comparar($experiencia){
	if ($experiencia>5 años) {
		echo .$experiencia "cumplen requerimiento";
	} else {
		echo .$experiencia "no cumple requerimiento";
	}	
}
function comparar ($estatura){
	if ($estatura>1,70 metros) {
		echo .$estatura "cumple requerimiento"; 
	} else {
		echo .“$estatura "no cumple requerimiento";
	}
}

function comparar($peso){
	if ($peso<50) {
		echo .$peso "cumple requerimiento";	
	} else {
		echo .$peso "no cumple requerimiento";
	}
}
function comparar($medidas){
	if ($medidas<90, 60, 90 cm) {
		echo .$medidas "cumple requerimiento";
	} else {
		echo .$medidas "no cumple requerimiento";
	}
}
?>