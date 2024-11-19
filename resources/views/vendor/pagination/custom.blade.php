@if ($paginator->hasPages())
    <div class="pagination-container">
        <div class="pagination">
            {{-- Indicator line --}}
            <span class="pagination__number-indicator"></span>

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="pagination__arrow pagination__arrow--disabled">
                    <span class="pagination__arrow-half"></span>
                    <span class="pagination__arrow-half"></span>
                </button>
            @else
                <button class="pagination__arrow" onclick="window.location='{{ $paginator->previousPageUrl() }}'">
                    <span class="pagination__arrow-half"></span>
                    <span class="pagination__arrow-half"></span>
                </button>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="pagination__number pagination__number--active" data-page="{{ $page }}">
                                {{ $page }}
                            </button>
                        @else
                            <button class="pagination__number" onclick="window.location='{{ $url }}'" data-page="{{ $page }}">
                                {{ $page }}
                            </button>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <button class="pagination__arrow pagination__arrow--right" onclick="window.location='{{ $paginator->nextPageUrl() }}'">
                    <span class="pagination__arrow-half"></span>
                    <span class="pagination__arrow-half"></span>
                </button>
            @else
                <button class="pagination__arrow pagination__arrow--right pagination__arrow--disabled">
                    <span class="pagination__arrow-half"></span>
                    <span class="pagination__arrow-half"></span>
                </button>
            @endif
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const pagination = document.querySelector('.pagination');
    
    if (pagination) {
        const paginationNumbers = document.querySelectorAll('.pagination__number');
        const paginationActiveNumber = document.querySelector('.pagination__number--active');
        const paginationNumberIndicator = document.querySelector('.pagination__number-indicator');

        const positionIndicator = (element) => {
            const paginationRect = pagination.getBoundingClientRect();
            const paddingElement = parseInt(window.getComputedStyle(element, null).getPropertyValue('padding-left'), 10);
            const elementRect = element.getBoundingClientRect();
            
            paginationNumberIndicator.style.left = `${elementRect.left + paddingElement - paginationRect.left}px`;
            paginationNumberIndicator.style.width = `${elementRect.width - paddingElement * 2}px`;
            
            if (element.classList.contains('pagination__number--active')) {
                paginationNumberIndicator.style.opacity = 1;
            } else {
                paginationNumberIndicator.style.opacity = 0.2;
            }
        };

        // Set initial indicator position
        if (paginationActiveNumber) {
            positionIndicator(paginationActiveNumber);
        }

        // Add hover effects
        paginationNumbers.forEach((element) => {
            element.addEventListener('mouseover', () => positionIndicator(element));
            element.addEventListener('mouseout', () => positionIndicator(paginationActiveNumber));
        });
    }
});
    </script>
    <style>
        .pagination-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 2rem 0;
}

.pagination {
    display: flex;
    flex-direction: row;
    padding: 24px;

    position: relative;
}

.pagination__number-indicator {
    position: absolute;
    height: 2px;
    background-color: #4338CA;
    opacity: 0;
    bottom: 38px;
    transition: all 0.2s ease;
}

.pagination__number {
    font-weight: 600;
    font-size: 16px;
    color: #D1D5DB;
    padding: 16px;
    background: none;
    border: none;
    cursor: pointer;
}

.pagination__number--active {
    color: #111827;
    position: relative;
}

.pagination__arrow {
    padding: 16px;
    position: relative;
    background: none;
    border: none;
    cursor: pointer;
}

.pagination__arrow--right {
    transform: scaleX(-1);
}

.pagination__arrow-half {
    width: 9px;
    height: 2px;
    border-radius: 1px;
    background-color: #4338CA;
    display: inline-block;
    position: absolute;
    transform-origin: 0;
    opacity: 1;
    transition: transform 0.1s ease-in-out, opacity 0.2s ease-in-out;
}

.pagination__arrow-half:first-child {
    transform: translateY(0.5px) rotate(-45deg);
}

.pagination__arrow-half:last-child {
    transform: translateY(-0.5px) rotate(45deg);
}

.pagination__arrow:hover .pagination__arrow-half:first-child {
    transform: translateY(0.5px) rotate(-30deg);
}

.pagination__arrow:hover .pagination__arrow-half:last-child {
    transform: translateY(-0.5px) rotate(30deg);
}

.pagination__arrow--disabled {
    pointer-events: none;
}

.pagination__arrow--disabled .pagination__arrow-half {
    opacity: 0.2;
}
    </style>
@endif