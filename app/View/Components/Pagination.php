<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;

class Pagination extends Component
{
    public int $end = 0;
    public int $start = 0;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public LengthAwarePaginator $cars
    ) {
        $this->start = max(1, $cars->currentPage() - 2);
        $this->end = min($cars->lastPage(), $cars->currentPage() + 2);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pagination');
    }
}
