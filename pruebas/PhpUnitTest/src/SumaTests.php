<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Matematicas;

final class SumaTests extends TestCase{
    public function suma_ValoresValidos(){
        //Arrange o Planteamiento
        $sumando1 = 3;
        $sumando2 = 5;
        $esperado = 8;

        //Act o Prueba
        $mate = new Matematicas();
        $actual = $mate.suma(sumando1, sumando2);
        //Assert o Afirmación
        $this->assertInstanceOf(esperado, actual);
    }
}

