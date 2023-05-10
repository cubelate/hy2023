@if ($paginator->hasPages())

<div class="pagination_df clearfix">
    {{-- Previous Page Link --}}


    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <div class="item btn_df item_more">...</div>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <div class="item btn_df active">{{ $page }}</div>
                @else
                    <div class="item btn_df"><a style="color: white" href="{{ $url }}">{{ $page }}</a></div>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"><div class="next btn_df"></div></a>
    @else
        <div class="next btn_df" style="background-color: #c1c4c5;"></div>
    @endif

</div>
@endif
