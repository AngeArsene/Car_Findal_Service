<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class SiteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
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

        return $this->resolveViewName(compact('latest_cars', 'favorite_cars'));
    }
}
