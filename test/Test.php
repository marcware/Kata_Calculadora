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
    //    $this->calculadora = new Calculadora();

    }

    /**
     * @return array
     */
    public function numerosParaCalcularSuma()
    {
        return [
            [2, 2, 4],
            [2.5, 2.5, 5],
            [-3, 1, -2],
        ];
    }


    /**
     * @test
     * @dataProvider numerosParaCalcularSuma
     */
    public function insertarNumeros($numeroUno, $numeroDos, $suma)
    {
        $calculadora = new Calculadora();
        $calculadora->setNumeroUno($numeroUno);
        $calculadora->setNumeroDos($numeroDos);
        $calculadora->sumar();

        $this->assertEquals($suma,  $calculadora->getResultado(), "no es un valor correcto");

    }


    /**
     * @return array
     */
    public function numerosParaCalcularRestar()
    {
        return [
            [6, 2, 4],
            [2.5, 2.5, 0],
            [-3, 1, -4],
        ];
    }

    /**
     * @test
     * @dataProvider numerosParaCalcularRestar
     */
    public function pruebaRestar($numeroUno, $numeroDos, $resultado)
    {
        $calculadora = new Calculadora();
        $calculadora->setNumeroUno($numeroUno);
        $calculadora->setNumeroDos($numeroDos);
        $calculadora->restar();

        $this->assertEquals($resultado,  $calculadora->getResultado(), "no es un valor correcto");
    }

    /**
     * @return array
     */
    public function numerosParaCalcularMultiplicar()
    {
        return [
            [6, 2, 12],
            [2.5, 2.5, 6.25],
            [-3, 1, -3],
            [-3, 0, 0],
        ];
    }
    /**
     * @test
     * @dataProvider numerosParaCalcularMultiplicar
     */
    public function pruebaMultiplicar($numeroUno, $numeroDos, $resultado)
    {
        $calculadora = new Calculadora();
        $calculadora->setNumeroUno($numeroUno);
        $calculadora->setNumeroDos($numeroDos);
        $calculadora->multiplicar();

        $this->assertEquals($resultado, $calculadora->getResultado(), "multiplicación no correcta");
    }

    /**
     * @return array
     */
    public function numerosParaCalcularDividir()
    {
        return [
            [6, 2, 3],
            [9.5, 2, 4.75],
        ];
    }
    /**
     * @test
     * @dataProvider numerosParaCalcularDividir
     */
    public function pruebaDividir($numeroUno, $numeroDos, $resultado)
    {
        $calculadora = new Calculadora();
        $calculadora->setNumeroUno($numeroUno);
        $calculadora->setNumeroDos($numeroDos);
        $calculadora->dividir();

        $this->assertEquals($resultado, $calculadora->getResultado(), "división no correcta");
    }

}