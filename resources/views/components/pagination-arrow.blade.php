@props(['direction', 'page_url'])

@if ($page_url)
    <a href="{{ $page_url }}" class="pagination-item">
        <x-arrow :direction="$direction" />
    </a>
@else
    <button disabled="true" class="pagination-item">
        <x-arrow :direction="$direction" />
    </button>
@endif
