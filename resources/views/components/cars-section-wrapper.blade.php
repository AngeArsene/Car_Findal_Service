<!--/ Cars Section Wrapper -->
@props(['section_title', 'cars', 'type'])

<section>
    <div class="container">
        <h2>{{ $section_title }}</h2>
        @empty($cars)
            <x-no-cars-found />
        @else
            <div class="car-items-listing">
                @foreach ($cars as $car)
                    <x-car-card-item :car="$car" :type="$type" />
                @endforeach
            </div>
        @endempty
    </div>
</section>
<!--/ Cars Section Wrapper -->
