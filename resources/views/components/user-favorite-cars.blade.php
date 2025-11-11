<!-- User Favorite Cars -->
@props(['cars'])

<section>
    <div class="container">
        <h2>My Favorite Cars</h2>
        @if (!empty($cars))
            <div class="car-items-listing">
                @foreach ($cars as $car)
                    <x-favorite-car-card-item :car='$car' />
                @endforeach
            </div>
        @else
            <x-no-cars-found />
        @endif
    </div>
</section>
<!--/ User Favorite Cars -->
