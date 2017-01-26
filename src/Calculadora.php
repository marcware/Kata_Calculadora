<?php

/**
 * Created by PhpStorm.
 * User: mpalacios
 * Date: 26/01/2017
 * Time: 17:16
 */

namespace src;

/**
 * Class Calculadora
 * @package src
 */
class Calculadora
{

    /**
     * @param $numeroUno
     * @param $numeroDos
     * @return int
     */
    public function sumar($numeroUno, $numeroDos)
    {
        if (!is_numeric($numeroUno) or !is_numeric($numeroDos)) {
            throw  new \InvalidArgumentException();
        }

        return $numeroUno + $numeroDos;

    }

}