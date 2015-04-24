<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:46
 */

namespace Elements;


class Head implements  Elemento
{

    private $id;
    private $value;
    private $headNumber;

    function __construct($id, $value, $headNumber)
    {
        $this->id = $id;
        $this->value = $value;
        $this->headNumber = $headNumber;

    }

    function render()
    {

        $tagHeadOpen = "<h".$this->headNumber." ";
        $tagHeadClose = "</h".$this->headNumber.">";

        if(empty($this->id))
        {
            echo  $tagHeadOpen." id='{$this->id}' >";

        }else
        {
            echo $tagHeadOpen.">";
        }

        echo " {$this->value} ".$tagHeadClose;

    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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




    /**
     * @return mixed
     */
    public function getHeadNumber()
    {
        return $this->headNumber;
    }

    /**
     * @param mixed $headNumber
     */
    public function setHeadNumber($headNumber)
    {
        $this->headNumber = $headNumber;
    }



} 