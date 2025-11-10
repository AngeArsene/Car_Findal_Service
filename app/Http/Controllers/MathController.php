<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($op, $a, $b): float | int
    {
        return $op($a, $b);
    }
}
