<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 26/05/15
 * Time: 14:01
 */

namespace Elements\Factory;
use Elements\Fields\Label;


class LabelFactory extends AbstractElementFactory{

    private $for;
    private $value;

    function __construct($for, $value)
    {
        $this->for = $for;
        $this->value = $value;

    }

    function createField(){
        return new Label($this->for, $this->value);
    }

} 