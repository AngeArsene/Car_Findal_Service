<?php

use Brick\Math\Exception\DivisionByZeroException;

if (! function_exists('sum')) {
    function sum(float | int $a, float | int $b): float | int
    {
        return $a + $b;
    }
}

if (! function_exists('sub')) {
    function sub(float | int $a, float | int $b): float | int
    {
        return $a - $b;
    }
}

if (! function_exists('mul')) {
    function mul(float | int $a, float | int $b): float | int
    {
        return $a * $b;
    }
}

if (! function_exists('div')) {
    function div(float | int $a, float | int $b): float | int
    {
        return $a / $b;
    }
}