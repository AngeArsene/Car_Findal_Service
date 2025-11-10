<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $page_name = Route::currentRouteName();

        $latest_cars = collect(range(1, 15))->map(fn () => new stdClass());
        $favorite_cars = collect(range(1, 5))->map(fn () => new stdClass());

        return view($page_name, compact('latest_cars', 'favorite_cars'));
    }
}
