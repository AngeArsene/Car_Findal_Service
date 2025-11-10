<!-- User Favorite Cars -->
@props(['cars'])

<section>
    <div class="container">
        <h2>My Favourite Cars</h2>
        <div class="car-items-listing">
            @forelse ($cars as $car)
                <x-favorite-car-card-item :car='$car' />
            @empty
            
            @endforelse
        </div>
    </div>
</section>
<!--/ User Favorite Cars -->
