<!--/ Cars Section Wrapper -->
@props(['section_title', 'cars', 'car_card_item'])

<section>
    <div class="container">
        <h2>{{ $section_title }}</h2>
        @empty($cars)
            <x-no-cars-found />
        @else
            <div class="car-items-listing">
                @foreach ($cars as $car)
                    @switch($car_card_item)
                        @case('normal')
                            <x-normal-car-card-item :car="$car" />
                        @break

                        @case('favorite')
                            <x-favorite-car-card-item :car="$car" />
                        @break
                    @endswitch
                @endforeach
            </div>
        @endempty
    </div>
</section>
<!--/ Cars Section Wrapper -->
