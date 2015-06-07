<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:46
 */

namespace Elements\Fields;

use Elements\Elemento;

class InputButton implements  Elemento
{

    private $name;
    private $value;



    function render()
    {

        echo "<input type='submit' name='{$this->name}'  value='{$this->value}'  >";

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