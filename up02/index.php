<?php

require_once 'Cuadrado.php';
require_once 'Rectangulo.php';
require_once 'Circulo.php';

$cuadrado1 = new Cuadrado(5);

echo "EL AREA DEL CUADRADO ES: " . $cuadrado1->calcularArea() . PHP_EOL;

$rectangulo1 = new Rectangulo(5, 4);

echo "EL AREA DEL RECTANGULO ES: " . $rectangulo1->calcularArea() . PHP_EOL;

$circulo1 = new Circulo(3);

echo "EL AREA DEL CIRCULO ES: " . $circulo1->calcularArea() . PHP_EOL;
