<?php
/**
 * Created by PhpStorm.
 * User: mpalacios
 * Date: 26/01/2017
 * Time: 17:17
 */

namespace test;

use src\Calculadora;

class Test extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function insertarNumeros()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(2, 2);
        $this->assertEquals(4, $resultado, "no es un valor correcto");
    }


}