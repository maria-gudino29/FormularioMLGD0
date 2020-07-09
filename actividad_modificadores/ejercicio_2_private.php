<?php
class Vocalista
{
    private $registro;
    public function cantar(){
        print "O mio babbino caro!";
    }
    public function setRegistro($registro){
        $this->registro = $registro;
    }
    public function getRegistro(){
        return $this->$registro;
    }
}
$voz = new Soprano();
$voz->setRegistro("Lírico");
echo $voz->getRegistro(); // Devuelve: Lírico
?>
