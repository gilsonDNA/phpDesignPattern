<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:28
 */

namespace Elements;


class InputText implements  Elemento
{

    private $name;
    private $value;

    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;

    }

    function render()
    {

        echo "<input type='text' name='{$this->name}'  value='{$this->value}'  >";

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