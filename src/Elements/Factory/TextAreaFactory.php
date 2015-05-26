<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 26/05/15
 * Time: 14:13
 */

namespace Elements\Factory;


use Elements\Fields\TextArea;

class TextAreaFactory extends  AbstractElementFactory{

    private $name;
    private $value;
    private $rows;
    private $cols;


    function __construct($name, $value, $rows, $cols)
    {
        $this->name = $name;
        $this->value = $value;
        $this->rows = $rows;
        $this->cols = $cols;

    }

    function createField(){
        return new TextArea($this->name, $this->value, $this->rows, $this->cols);
    }
} 