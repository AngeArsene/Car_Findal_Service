<!--/ Cars Section Wrapper -->
@props(['section_title', 'cars'])

<section>
    <div class="container">
        <h2>{{ $section_title }}</h2>
        @empty($cars)
            <x-no-cars-found />
        @else
            <div class="car-items-listing">
                @foreach ($cars as $car)
                    {{ $slot }}
                @endforeach
            </div>
        @endempty
    </div>
</section>
<!--/ Cars Section Wrapper -->
