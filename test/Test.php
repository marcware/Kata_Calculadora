<?php
/**
 * Created by PhpStorm.
 * User: mpalacios
 * Date: 26/01/2017
 * Time: 17:17
 */

namespace test;

use src\Calculadora;

/**
 * Class Test
 * @package test
 */
class Test extends \PHPUnit_Framework_TestCase
{

    private $calculadora;

    /**
     *
     */
    public function setUp()
    {
        $this->calculadora = new Calculadora();

    }

    /**
     * @return array
     */
    public function numerosParaCalcular()
    {
        return [
            [2, 2, 4],
            [2.5, 2.5, 5],
            [-3, 1, -2],
        ];
    }

    /**
     * @test
     * @dataProvider numerosParaCalcular
     */
    public function insertarNumeros($numeroUno, $numeroDos, $suma)
    {
        $calculadora = new Calculadora();
        $this->assertEquals($suma, $this->calculadora->sumar($numeroUno, $numeroDos), "no es un valor correcto");

    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     *
     */
    public function crearExcepcionAlPasarValoresIncorrectos()
    {
        $calculadora = new Calculadora();
        $this->calculadora->sumar('a', []);

    }


}