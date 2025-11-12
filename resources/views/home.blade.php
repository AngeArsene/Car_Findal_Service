@props(['latest_cars', 'favorite_cars'])

<x-layouts.main>
    <!-- Home Slider -->
    <x-main-hero-slider />

    <main>
        <!-- Find a car form -->
        <x-search-car-form />

        <!-- New Cars -->
        <x-latest-added-cars :cars="$latest_cars" />

        @auth
            <!-- Favorite Cars -->
            <x-user-favorite-cars :cars="$favorite_cars" />
        @endauth
    </main>
</x-layouts.main>
