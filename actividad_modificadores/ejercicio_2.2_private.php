<?php
class Vocalista
{
    private $registro;
    private function ladrar(){
        print "O mio babbino caro!";
    }
}
class Soprano extends Vocalista {}
$voz = new Soprano();
$voz->$registro = "Ligero";
var_dump($voz);
/*
Devuelve:
object(Soprano)[1]
  private '$registro' (Vocalista) => null
  public '$registro' => string 'Ligero' (length=6)
?>