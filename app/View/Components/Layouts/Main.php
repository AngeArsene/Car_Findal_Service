<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;

class Main extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $header = true,
        public bool $footer = true,
        public ?LengthAwarePaginator $cars = null
    ) {
    }

    public function pageTitle(): string
    {
        $title = Str::of(Route::currentRouteName())->replace(['.', '-'], ' ')->replace('index', 'home', false)->title();

        return $title . ' - ' . config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.main');
    }
}
