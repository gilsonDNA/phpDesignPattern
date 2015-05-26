<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 26/05/15
 * Time: 13:13
 */
namespace Elements\Factory;

abstract class AbstractElementFactory
{

    abstract protected function createField();

    function getField(){
        return $this->createField();
    }


} 