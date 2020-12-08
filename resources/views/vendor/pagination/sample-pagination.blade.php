@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center pagination-lg mt-3">
            {{-- Previous Page Link --}}@cannot('update', Model::class)

            @endcannot
            @if (!($paginator->onFirstPage()))
                <li class="page-item mr-1">
                    <a class="page-link text-white bg-dark" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Prev</a>
                </li>
            @endif
            
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled text-white bg-dark" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active mr-1" aria-current="page"><span class="page-link bg-info border-success">{{ $page }}</span></li>
                        @else
                            <li class="page-item mr-1"><a class="page-link text-white bg-dark" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link text-white bg-dark" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                </li>
            @endif
        </ul>
    </nav>
@endif