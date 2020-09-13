<?php
require __DIR__.'/vendor/autoload.php';

use src\Retangulo;
use src\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3>Área do retângulo: '.$retangulo->getArea().'</h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);

echo '<h3>Área do quadrado: '.$quadrado->getArea().'</h3>';
