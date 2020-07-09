<?php
class Vocalista
{
    public $registro;
    final public function cantar(){
        print "O mio babbino caro!";
    }
}
class Soprano extends Vocalista {
    // Dará error:
    public function cantar()
    {
        print "Oh mi querido papaito!";
    }
}
$voz = new Soprano();
$voz->cantar(); // Cannot override final method
?>