<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 26/05/15
 * Time: 14:04
 */

namespace Elements\Factory;


use Elements\Fields\Paragraph;

class ParagraphFactory extends AbstractElementFactory{

    private $id;
    private $value;

    function __construct($id, $value)
    {
        $this->id = $id;
        $this->value = $value;

    }


    function createField(){
        return new Paragraph($this->id, $this->value);
    }

} 