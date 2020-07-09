<?php
class Vocalista
{
    protected $registro;
    protected function cantar(){
        print "O mio babbino caro!";
    }
}
class Soprano extends Vocalista {
    public function cantarSoprano(){
        // Podemos acceder a cantar() de la clase Vocalista
        return $this->cantar();
    }
    public function setRegistro($registro){
        $this->registro = $registro;
    }
    public function getRegistro(){
        print $this->registro;
    }
}

?>