<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Main Layout Component
 *
 * This component serves as the primary layout wrapper for the application.
 * It manages the display of header and footer elements and handles pagination
 * of car listings throughout the application.
 *
 * @package App\View\Components\Layouts
 * @category View Components
 *
 * @property bool $header Whether to display the header component
 * @property bool $footer Whether to display the footer component
 * @property LengthAwarePaginator|null $cars Paginated collection of cars for display
 *
 * @example
 * <x-layouts.main :header="true" :footer="true" :cars="$paginatedCars" />
 */
class Main extends Component
{
    /**
     * Main layout component constructor.
     *
     * @param bool $header Whether to display the header component. Defaults to true.
     * @param bool $footer Whether to display the footer component. Defaults to true.
     * @param LengthAwarePaginator|null $cars A paginated collection of cars to be displayed. Defaults to null.
     */
    public function __construct(
        public bool $header = true,
        public bool $footer = true,
        public ?LengthAwarePaginator $cars = null
    ) {
    }

    /**
     * Generate the page title based on the current route name.
     *
     * Converts the current route name to a human-readable title by:
     * - Replacing dots and hyphens with spaces
     * - Replacing 'index' with 'home' (case-insensitive)
     * - Converting to title case
     *
     * @return string The formatted page title with app name appended
     */
    public function pageTitle(): string
    {
        $title = Str::of(Route::currentRouteName())->replace(['.', '-'], ' ')->replace('index', 'home', false)->title();

        return $title . ' - ' . config('app.name');
    }

    /**
     * Render the main layout component.
     *
     * This method is responsible for rendering the main layout view
     * that serves as the primary template structure for the application.
     *
     * @return View|Closure|string The rendered main layout view, a closure, or a string representation.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.main');
    }
}
