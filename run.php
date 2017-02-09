<?php

require __DIR__ . '\vendor\autoload.php';

use src\Calculadora;

$calculadora = new Calculadora();

echo $calculadora->sumar(2, 2);

echo $calculadora->sumar('a', 'b');

///echo $calculadora->sumar(2, 2);
