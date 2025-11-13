@props(['route'])

<a href="{{ route($route) }}" {{ $attributes }} @style([
    'opacity: 0.5;
     cursor: not-allowed;
     pointer-events: none;' => Route::currentRouteName() === $route,
])>
    {{ $slot }}
</a>
