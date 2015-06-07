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

    abstract function createField($tipo, $array);

    function getField(){
        return $this->createField($tipo, $array);
    }


} 