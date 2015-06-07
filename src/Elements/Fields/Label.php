<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:46
 */

namespace Elements\Fields;

use Elements\Elemento;


class Label implements  Elemento
{

    private $for;
    private $value;



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

    /**
     * @return mixed
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * @param mixed $for
     */
    public function setFor($for)
    {
        $this->for = $for;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }






} 