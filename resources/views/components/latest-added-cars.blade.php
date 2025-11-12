<!-- Latest Added Cars -->
@props(['cars'])

<x-cars-section-wrapper section_title='Latest Added Cars' :cars="$cars">
    <x-normal-car-card-item />
</x-cars-section-wrapper>
