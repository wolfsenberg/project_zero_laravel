@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{!! __('Pagination Navigation') !!}" class="mt-6 flex justify-center">
        <div class="flex space-x-4">

            @if ($paginator->onFirstPage())
                <span
                    class="w-32 h-12 flex items-center justify-center text-sm font-medium text-black bg-gray-200 border border-gray-300 cursor-not-allowed rounded-md">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="w-32 h-12 flex items-center justify-center text-sm font-medium text-black bg-white border border-gray-300 rounded-md hover:bg-gray-100 transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="w-32 h-12 flex items-center justify-center text-sm font-medium text-black bg-white border border-gray-300 rounded-md hover:bg-gray-100 transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="w-32 h-12 flex items-center justify-center text-sm font-medium text-black bg-gray-200 border border-gray-300 cursor-not-allowed rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>
    </nav>
@endif
