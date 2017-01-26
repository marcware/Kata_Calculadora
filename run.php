<?php
/**
 * Created by PhpStorm.
 * User: mpalacios
 * Date: 26/01/2017
 * Time: 17:21
 */

require __DIR__.'\vendor\autoload.php';

use src\Calculadora;

$calculadora = new Calculadora();

echo $calculadora->sumar(2, 2);
