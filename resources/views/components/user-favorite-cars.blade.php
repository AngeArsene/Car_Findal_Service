<!-- User Favorite Cars -->
@props(['cars'])

<x-cars-section-wrapper section_title='Latest Added Cars' :cars="$cars">
    <x-favorite-car-card-item />
</x-cars-section-wrapper>
