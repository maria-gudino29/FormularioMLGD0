<?php
voz = new Soprano();
// Podemos acceder a la función ladrar() desde ladrarBulldog():
$voz->cantarSoprano(); // Devuelve O mio babbino caro!
// No podemos acceder a cantar() desde el objeto voz:
$voz->Cantar(); // Fatal error: Call to protected method Vocalista::cantar()
// Tampoco podemos asignarle un nombre, pues $registro también es protected
$voz->registro = "Ligero"; // Fatal Error: Cannot access protected property
// Si podemos asignarle un valor con el método setRegistro():
$voz->setRegistro("Ligero");
// Y mostrarlo con getRegistro():
echo $voz->getRegistro(); // Devuelve: Ligero
?>