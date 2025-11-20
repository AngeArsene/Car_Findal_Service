<nav class="pagination my-large">

    {{-- Previous arrow --}}
    <x-pagination-arrow page_url="{{ $cars->previousPageUrl() }}" direction="prev" />

    {{-- Page numbers --}}
    @for ($i = $start; $i <= $end + 5; $i++)
        @if ($i == $cars->currentPage())
            <span class="pagination-item active">{{ $i }}</span>
        @else
            <a href="{{ $cars->url($i) }}" class="pagination-item">{{ $i }}</a>
        @endif
    @endfor

    {{-- Next arrow --}}
    <x-pagination-arrow page_url="{{ $cars->nextPageUrl() }}" direction="next" />

</nav>
