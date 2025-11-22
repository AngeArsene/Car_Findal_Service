<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __call($name, $arguments)
    {
        return to_route('auth.verify-email');
    }

    public function login(): View
    {
        return $this->resolveViewName();
    }

    public function signup(): View
    {
        return $this->resolveViewName();
    }

    public function resetPassword(): View
    {
        return $this->resolveViewName();
    }

    public function verifyEmail(): View
    {
        return $this->resolveViewName();
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        return to_route('home');
    }
}
