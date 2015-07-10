<?php

namespace Elements;


class FieldSetsTest extends \PHPUnit_Framework_TestCase
{

    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf("Elements\FieldSets", new \Elements\FieldSets());
    }

    /*

    public function dataProvider()
    {
        return [
            [2,2,4],
            [3,3,6],
            [10,15,25]
        ];
    }

    /**
     * @param $x
     * @param $y
     * @param $resultado
     * @dataProvider dataProvider
     */
    /*
    public function testVerificaSeConsegueSomarComProvider($x, $y, $resultado)
    {
        $math = new \CodeEducation\Math();
        $res = $math->soma($x, $y);
        $this->assertEquals($resultado, $res);

    }

    public function testVerificaSeConsegueSomar()
    {
        $math = new \CodeEducation\Math();
        $resultado = $math->soma(10, 12);
        $this->assertEquals(22, $resultado);

        $resultado = $math->soma(2, 5);
        $this->assertEquals(7, $resultado);

    }

    /**
     * @expectedException InvalidArgumentException
     */
    /*
    public function testVerificaSeValoresSaoNumericos()
    {
        $math = new \CodeEducation\Math();
        $resultado = $math->soma(10, "Valor qualquer");

    }

    */

} 