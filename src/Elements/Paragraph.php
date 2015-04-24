<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:46
 */

namespace Elements;


class Paragraph implements  Elemento
{

    private $id;
    private $value;

    function __construct($id, $value)
    {
        $this->id = $id;
        $this->value = $value;

    }

    function render()
    {

        if(empty($this->id))
        {
            echo "<p id='{$this->id}' >";

        }else
        {
            echo "<p>";
        }

        echo " '{$this->value}' </p>";

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