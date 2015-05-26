<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 26/05/15
 * Time: 13:58
 */

namespace Elements\Factory;

use Elements\Fields\InputPassword;


class InputPasswordFactory extends AbstractElementFactory{

    private $name;
    private $value;

    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;

    }

    function createField(){
        return new InputPassword($this->name, $this->value);
    }

} 