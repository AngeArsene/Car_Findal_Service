<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = collect()->times(500, function (int $id): object {
            return (object) [
                'id' => $id,
                'name' => fake()->word
            ];
        })->paginate(5);

        return $this->resolveViewName(compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->resolveViewName();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        return $this->resolveViewName();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return $this->resolveViewName();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return $this->resolveViewName();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    private function resolveViewName(?array $params = []): View
    {
        return view(Route::currentRouteName(), $params);
    }
}
