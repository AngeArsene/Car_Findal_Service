@props(['latest_cars', 'favorite_cars'])

<x-layouts.main>
    <!-- Home Slider -->
    <x-main-hero-slider />

    <main>
        <!-- Find a car form -->
        <x-search-car-form />

        <!-- New Cars -->
        <x-cars-section-wrapper section_title='Latest Added Cars' type='normal' :cars="$latest_cars" />

        {{-- @auth --}}
            <!-- Favorite Cars -->
            <x-cars-section-wrapper section_title='User Favorite Cars' type="favorite" :cars="$favorite_cars" />
        {{-- @endauth --}}
    </main>
</x-layouts.main>
