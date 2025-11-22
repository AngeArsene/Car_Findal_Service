<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class NavBarLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $route)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
<a href="{{ route($route) }}" {{ $attributes }} @style([
    'opacity: 0.5;
     cursor: not-allowed;
     pointer-events: none;' => Route::currentRouteName() === $route,
])>
    {{ $slot }}
</a>
blade;
    }
}
