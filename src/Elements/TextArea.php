<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 17/04/15
 * Time: 12:35
 */

namespace src\Elements;


class TextArea implements Elemento{

    private $name;
    private $value;
    private $rows;
    private $cols;
    function __construct($name, $value, $rows, $cols){
        this->$name = $name;
        this->$value = $value;
        this->$rows = $rows;
        this->$cols = $cols;

    }

    function render(){

        echo "<textarea name='{this->$name}'  rows='{this->$rows}'  cols='{this->$rows}'> '{this->$value}' </textarea> ";

    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }



} 