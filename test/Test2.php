<?php

namespace test;

use src\Calculadora;

/**
 * Created by PhpStorm.
 * User: marco
 * Date: 09/02/2017
 * Time: 17:04
 */
class Test2 extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \Exception
     */
    public function testNumerosFueradeRango()
    {
        $calculadora = new Calculadora();
        $calculadora->setNumeroUno(1200000000);
        $calculadora->setNumeroDos(140003030);
        $calculadora->multiplicar();
    }


    /**
     * @test
     * @expectedException \Exception
     *
     */
    public function crearExcepcionAlPasarValoresIncorrectos()
    {
        $calculadora = new Calculadora();
        $calculadora->setNumeroUno('a');
        $calculadora->setNumeroDos('b');
        $calculadora->sumar();

    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function crearExcepcionDividirPorCero()
    {
        $calculadora = new Calculadora();
        $calculadora->setNumeroUno(7);
        $calculadora->setNumeroDos(0);
        $calculadora->dividir();
    }


}