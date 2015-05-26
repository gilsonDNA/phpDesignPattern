<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:41
 */

namespace Elements\Fields;

use Elements\Elemento;


class InputPassword implements  Elemento
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

        echo "<input type='password' name='{$this->name}'  value='{$this->value}'  >";

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