<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:12
 */

namespace Elements;


interface ElementoContainer
{

    function render();
    function addElemento(Elemento $elemento);

} 