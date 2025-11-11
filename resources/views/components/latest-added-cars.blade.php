<!-- Latest Added Cars -->
@props(['cars'])

<section>
    <div class="container">
      <h2>Latest Added Cars</h2>
      <div class="car-items-listing">
        @forelse ($cars as $car)
          <x-normal-car-card-item :car='$car' />
        @empty
            <x-no-cars-found />
        @endforelse
      </div>
    </div>
</section>
<!--/ Latest Added Cars -->
