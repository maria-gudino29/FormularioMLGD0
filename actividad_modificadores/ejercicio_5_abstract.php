<?php
abstract class Vocalista {//Este modificador establece que la clase o método nunca podrá ser instanciada, sólo heredada.
}
class Soprano extends Vocalista {
}
abstract class Cantante extends Soprano {

}
?>

<?php//Si se define un método abstracto dentro de una clase, ésta ha de ser abstracta también. Un método abstracto define una función pero no su implementación. Cuando una clase hereda de una abstracta, si ésta tiene un método abstracto, debe ser definido en la clase hija. En el siguiente ejemplo, los métodos setPotencia() y getPotencia() deberán ser definidos en las clases hijas:
abstract class CantanteAbstract {

    public function getCanción()
    {
        return 1;
    }
    abstract public function setRegistro($registro);
    abstract public function getRegistro();
}
class Soprano extends CantanteAbstract {
    public $genero = 'opera';
    protected $registro;
    public function setRegistro($registro)
    {
        $this->registro = $registro;
    }
    public function getRegistro()
    {
        return $this->cancion;
    }
}
$opera = new Opera;
$cancion = $opera->getCancion();
$opera->setRegistro(1);
$genero = $opera->getRegistro();

echo "Vocalista " . " de ". $opera->genero . "ha cantado " . $cancion . " canción " . "con " . $registro . " rango vocal ligero";
// Devuelve Cantante de opera ha cantado 1 cancion con 1 rango vocal ligero
