<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:12
 */

namespace src\Elements;


interface Elemento {

    private $name;
    private $value;
    function render();

} 