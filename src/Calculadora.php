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

    private $numeroUno;
    private $numeroDos;
    private $resultado;

    /**
     * @return mixed
     */
    public function getNumeroUno()
    {
        return $this->numeroUno;
    }

    /**
     * @param mixed $numeroUno
     */
    public function setNumeroUno($numeroUno)
    {
        $this->numeroUno = $numeroUno;
    }

    /**
     * @return mixed
     */
    public function getNumeroDos()
    {
        return $this->numeroDos;
    }

    /**
     * @param mixed $numeroDos
     */
    public function setNumeroDos($numeroDos)
    {
        $this->numeroDos = $numeroDos;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    public function __construct()
    {
    }

    /**
     * @param $numeroUno
     * @param $numeroDos
     * @return int
     */
    public function sumar()
    {
        $this->comprobarNumeros();

        $this->resultado = $this->numeroUno + $this->numeroDos;

    }

    public function restar(){
        $this->comprobarNumeros();

        $this->resultado = $this->numeroUno - $this->numeroDos;
    }

    public function multiplicar()
    {
        $this->comprobarNumeros();
        $this->resultado=$this->numeroUno * $this->numeroDos;
    }

    public function dividir()
    {
        if($this->numeroDos==0){
            throw new \Exception("Division po cero");
        }

        $this->comprobarNumeros();

        $this->resultado = $this->numeroUno / $this->numeroDos;
    }

    public function comprobarNumeros(){
        if (!is_numeric($this->numeroUno) or !is_numeric($this->numeroDos)) {
            throw  new \InvalidArgumentException();
        }

        if ($this->numeroUno>=1000000 OR $this->numeroDos>=1000000){
            throw new \Exception('FueraDeRAngo');
        }

    }

}