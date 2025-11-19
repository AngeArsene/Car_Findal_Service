@props(['cars'])

@php
    $start = max(1, $cars->currentPage() - 2);
    $end = min($cars->lastPage(), $cars->currentPage() + 2);
@endphp

<nav class="pagination my-large">

    {{-- Previous arrow --}}
    @if ($cars->previousPageUrl())
        <a href="{{ $cars->previousPageUrl() }}" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" style="width: 18px">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </a>
    @else
        <button disabled="true" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" style="width: 18px">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>
    @endif

    {{-- Page numbers --}}
    @for ($i = $start; $i <= $end + 5; $i++)
        @if ($i == $cars->currentPage())
            <span class="pagination-item active">{{ $i }}</span>
        @else
            <a href="{{ $cars->url($i) }}" class="pagination-item">{{ $i }}</a>
        @endif
    @endfor

    {{-- Next arrow --}}
    @if ($cars->nextPageUrl())
        <a href="{{ $cars->nextPageUrl() ?? '#' }}" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" style="width: 18px">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    @else
        <button disabled="true" class="pagination-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" style="width: 18px">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    @endif

</nav>
