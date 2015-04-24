<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:46
 */

namespace Elements;


class Label implements  Elemento
{

    private $for;
    private $value;

    function __construct($for, $value)
    {
        $this->for = $for;
        $this->value = $value;

    }

    function render()
    {
        echo "<label for='{$this->for}'> {$this->value} </label>";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


} 