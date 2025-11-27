<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\View\View;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cars = collect()->times(500, function (int $id): object {
            return (object) [
                'id' => $id,
                'name' => fake()->word
            ];
        })->paginate(5);

        return $this->resolveViewName(compact('cars'));
    }

    public function favorite(): View
    {
        $cars = collect()->times(500, function (int $id): object {
            return (object) [
                'id' => $id,
                'name' => fake()->word
            ];
        })->paginate(15);

        return $this->resolveViewName(compact('cars'));
    }

    public function search(): View
    {
        $cars = collect()->times(500, function (int $id): object {
            return (object) [
                'id' => $id,
                'name' => fake()->word
            ];
        })->paginate(15);

        return $this->resolveViewName(compact('cars'));
    }

    public function images(int $car): View
    {
        return $this->resolveViewName();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return $this->resolveViewName();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request): View
    {
        return $this->resolveViewName();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $car): View
    {
        $related_cars = collect()->times(5, function (int $id): object {
            return (object) [
                'id' => $id,
                'name' => fake()->word
            ];
        });

        return $this->resolveViewName(compact('related_cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $car): View
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
}
