<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;

class Main extends Component
{
    public string $page_name = '';
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $pagination = true,
        public ?LengthAwarePaginator $cars = null
    ) {
        $this->page_name = str_replace(
            'Index', 'Home', ucwords(
                str_replace('.', " ",
                ucfirst(Route::currentRouteName())
            )
            )
        )
        . ' - ' . config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.main');
    }
}
