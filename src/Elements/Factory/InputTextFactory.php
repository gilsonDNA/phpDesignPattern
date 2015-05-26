<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 26/05/15
 * Time: 14:00
 */

namespace Elements\Factory;

use Elements\Fields\InputText;


class InputTextFactory extends AbstractElementFactory{

    private $name;
    private $value;

    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;

    }

    function createField(){
        return new InputText($this->name, $this->value);
    }

} 