<?php
include_once 'Calculator.php';
class CalculatorTest extends Calculator
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $Operand = ADDITION;
        $expected = 2;
        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $secondOperand, $Operand);
        $this->assertEquals($expected, $result);
    }
}
