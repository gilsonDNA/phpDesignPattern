<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:48
 */

namespace Elements;


use Elements\Factory\AbstractElementFactory;
use Elements\Fields\InputButton;
use Elements\Fields\InputPassword;
use Elements\Validation\Validator;
use Elements\Fields\InputText;
use Elements\Fields\Label;

class Form extends AbstractElementFactory implements  Elemento
{

    private $name;
    private $value;
    private $arrayElementos = array();
    protected $validator;


    function __construct($name, $value, Validator $validator)
    {
        $this->name = $name;
        $this->value = $value;
        $this->validator = $validator;
    }

    function createField($tipo, $array){

        if($tipo == 'input' && isset($array['type']))
        {
            if($array['type'] == 'text'){
                return new InputText();
            }

            if($array['type'] == 'password'){
                return new InputPassword();
            }

            if($array['type'] == 'button'){
                return new InputButton();
            }


        }

        if($tipo == 'label' ){
            return  new Label();

        }

    }

    function render()
    {

        echo "<form  action='{$this->name}'   >";
        foreach($this->arrayElementos  as $elemento){
            $elemento->render();
            echo "<br />";
        }

        echo "</form>";

    }

    function addElemento(Elemento $elemento)
    {
        $this->arrayElementos[] = $elemento;
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