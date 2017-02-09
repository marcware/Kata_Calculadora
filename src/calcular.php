<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 09/02/2017
 * Time: 17:35
 */
namespace src;
use src\Calculadora;

require_once 'Calculadora.php';

$calculadora = new Calculadora();
$calculadora->setNumeroUno($_POST['numero1']);
$calculadora->setNumeroDos($_POST['numero2']);

if(isset($_POST['suma'])){
    $calculadora->sumar();
    echo $calculadora->getNumeroUno() . "+" . $calculadora->getNumeroDos() . "=" . $calculadora->getResultado();
} elseif (isset($_POST['resta'])){
    $calculadora->restar();
    echo $calculadora->getNumeroUno() . "-" . $calculadora->getNumeroDos() . "=" . $calculadora->getResultado();
} elseif (isset($_POST['multiplicar'])){
    $calculadora->multiplicar();
    echo $calculadora->getNumeroUno() . "*" . $calculadora->getNumeroDos() . "=" . $calculadora->getResultado();
} elseif (isset( $_POST['dividir'])){
    $calculadora->dividir();
    echo $calculadora->getNumeroUno() . "/" . $calculadora->getNumeroDos() . "=" . $calculadora->getResultado();
}
