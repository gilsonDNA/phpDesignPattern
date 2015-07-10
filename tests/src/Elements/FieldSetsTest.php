<?php

namespace Elements;
use SebastianBergmann\RecursionContext\InvalidArgumentException;

class FieldSetsTest extends \PHPUnit_Framework_TestCase
{

    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf("Elements\FieldSets", new \Elements\FieldSets());
    }



    public function dataProvider()
    {
        return [
            ["input" , array('type' => 'text'), "Elements\Fields\InputText" ],
            ["input" , array('type' => 'button'), "Elements\Fields\InputButton" ],
            ["label" , null , "Elements\Fields\Label" ],
        ];
    }

    /**
     *
     * @dataProvider dataProvider
     */

    public function testVerificaSeCreateFieldComProvider($tipo, $array, $tipoClasse)
    {
        $fieldSet = new \Elements\FieldSets();
        $objeto = $fieldSet->createField($tipo, $array) ;
        $this->assertInstanceOf($tipoClasse, $objeto);

    }



    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSeRenderFuncionaSemElementos()
    {

        $fieldSet = new \Elements\FieldSets();
        $resultado = $fieldSet->render();

    }




} 