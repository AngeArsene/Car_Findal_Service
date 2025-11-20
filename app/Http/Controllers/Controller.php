<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Route;

abstract class Controller
{
    protected function resolveViewName(?array $params = []): View
    {
        return view(Route::currentRouteName(), $params);
    }
}
