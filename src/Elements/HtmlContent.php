<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 13:13
 */

namespace src\Elements;

include ("src/Elements/Elemento.php");


class HtmlContent implements Elemento{

    private $name;
    private $value;
    private $arrayElementos;
    function __construct($name, $value){
        $this->name = $name;
        $this->value = $value;
        $this->arrayElementos =  array();

    }

    function render(){

        echo "<html>";
        echo "<head> <title> '{this->value}' </title> </head>";
        echo "<body>";
        foreach($this->$arrayElementos  as $elemento){
            $elemento->render();
            echo "<br />";
        }
        echo "</body>";
        echo "</html>";

    }


    function addElemento(Elemento $elemento){

        $this->arrayElementos[] = $elemento;
    }








    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }




} 