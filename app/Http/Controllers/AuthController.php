<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(): View
    {
        return $this->resolveViewName();
    }

    public function signup(): View
    {
        return $this->resolveViewName();
    }
}
