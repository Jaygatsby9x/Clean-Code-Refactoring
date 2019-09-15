<?php

class Calculator
{
    const ADDITION = '+';
    const SUBTRACTION = '-';
    const MULTIPLICATION = '*';
    const DIVISION = '/';
    const ZERO = 0;

    public function calculate($firstOperand, $secondOperand, $operator) {
        switch ($operator) {
            case self::ADDITION:
                return $firstOperand + $secondOperand;
            case self::SUBTRACTION:
                return $firstOperand - $secondOperand;
            case '' . self::MULTIPLICATION . '':
                return $firstOperand * $secondOperand;
            case '' . self::DIVISION . '':
                if ($secondOperand != self::ZERO) {
                    return $firstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}