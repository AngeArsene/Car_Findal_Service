<?php

namespace App\Providers;

use App\Models\Car;
use App\Policies\CarPolicy;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Car::class, CarPolicy::class);

        Collection::macro('paginate', function ($perPage = 10, $page = null, $options = []) {
            $page = $page ?: (Request::input('page', 1));
            $items = $this->forPage($page, $perPage);

            return new LengthAwarePaginator(
                $items,
                $this->count(),
                $perPage,
                $page,
                $options + [
                    'path' => Request::url(),
                    'query' => Request::query(),
                ]
            );
        });
    }
}
