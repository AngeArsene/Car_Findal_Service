<?php

namespace App;

use Exception;

final class Math
{
    public const OPERATIONS = ['sum', 'sub', 'mul', 'div'];

    public static function getRandomOperator(?int $count = 1): string | array
    {
        $operators = self::OPERATIONS;

        if ($count > 1 && $count < count($operators)) {
            $chosen    = [];

            shuffle($operators);

            for ($i=1; $i < $count; $i++) { 
                $chosen[] = array_pop($operators);
            }

            return $chosen;
        } else if ($count >= $operators) {
            throw new Exception(
                'Instead use Math::OPERATORS to get all the available arithmetic operators'
            );
        } else {
            return $operators[array_rand($operators)];
        }
    }
}
