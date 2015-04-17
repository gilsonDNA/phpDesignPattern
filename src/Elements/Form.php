<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:48
 */

namespace src\Elements;


class Form implements  Elemento{

    private $name;
    private $value;
    private $arrayElementos;
    function __construct($name, $value){
        this->$name = $name;
        this->$value = $value;
        this->$arrayElementos = new Array();

    }

    function render(){

        echo "<form  action='{this->$name}'   >";
        foreach(this->$arrayElementos  as $elemento){
            $elemento->render();
            echo "<br />";
        }

        echo "</form>";

    }

    function addElemento(Elemento $elemento){

        this->$arrayElementos[] = $elemento;
    }



    /**
     * @return mixed
     */
    public function getArrayElementos()
    {
        return $this->arrayElementos;
    }

    /**
     * @param mixed $arrayElementos
     */
    public function setArrayElementos($arrayElementos)
    {
        $this->arrayElementos = $arrayElementos;
    }


} 