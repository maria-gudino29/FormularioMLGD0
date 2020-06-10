<?php
include 'Ropas.php';
echo "Probando precio de venta<br>";
$pantalon=new pantalon('nombre','tipo','estilo','uso','materiales');
echo $pantalon->vender('25');