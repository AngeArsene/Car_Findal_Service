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

        $latest_cars = collect()->times(500, function (int $id): object {
            return (object) [
                'id' => $id,
                'name' => fake()->word
            ];
        })->paginate(15);

        $favorite_cars = collect()->times(5, function (int $id): object {
            return (object) [
                'id' => $id,
                'name' => fake()->word
            ];
        });

        return view($page_name, compact('latest_cars', 'favorite_cars'));
    }
}
