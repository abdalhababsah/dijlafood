@if ($paginator->hasPages())
    <nav>
        <ul class="pagination" style="list-style: none; display: flex; gap: 5px; justify-content: center; padding: 0;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" style="pointer-events: none;">
                    <span style="padding: 10px 15px; background: #ccc; color: #fff; border-radius: 5px;">&laquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" style="padding: 10px 15px; background: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" style="pointer-events: none;">
                        <span style="padding: 10px 15px; background: #ccc; color: #fff; border-radius: 5px;">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" style="pointer-events: none;">
                                <span style="padding: 10px 15px; background: #007bff; color: #fff; border-radius: 5px;">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" style="padding: 10px 15px; background: #f8f9fa; color: #007bff; text-decoration: none; border-radius: 5px;">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" style="padding: 10px 15px; background: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">&raquo;</a>
                </li>
            @else
                <li class="disabled" style="pointer-events: none;">
                    <span style="padding: 10px 15px; background: #ccc; color: #fff; border-radius: 5px;">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
