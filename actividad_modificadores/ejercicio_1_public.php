<?php
class Vocalista
{
    public $registro;
    public function cantar(){
        print "O mio babbino caro!";
    }
}
class Soprano extends Vocalista {
    public function cantar(){
        print "Oh mi querido papaito!";
    }
}
$voz = new Soprano();
$voz->registro = "Ligero";
print $primera_voz->registro; // Devuelve: Ligero
?>