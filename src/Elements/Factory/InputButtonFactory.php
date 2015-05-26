<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 26/05/15
 * Time: 13:53
 */

namespace Elements\Factory;

use Elements\Fields\InputButton;


class InputButtonFactory extends AbstractElementFactory {

    private $name;
    private $value;

    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;

    }

    function createField(){
        return new InputButton($this->name, $this->value);
    }
} 