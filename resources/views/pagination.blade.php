@if ($paginator->hasPages())

<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex px-5 py-2 items-center ">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
            {!! __('pagination.previous') !!}
        </span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
            {!! __('pagination.previous') !!}
        </a>
        @endif

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
            {!! __('pagination.next') !!}
        </a>
        @else
        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
            {!! __('pagination.next') !!}
        </span>
        @endif
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-around">
        <div>
            <p class="text-sm text-green-500 leading-5 dark:text-gray-400">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>

        <div>
            <span class="relative z-0 inline-flex rtl:flex-row-reverse gap-1 rounded-md">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())

                <a class="px-2 bg-primary/50 flex rounded-full items-center justify-center" aria-label="{{ __('pagination.previous') }}">
                    <i class="bi bi-chevron-left font-bold text-gray-200"></i>
                </a>
                @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-2 bg-primary flex rounded-full items-center justify-center" aria-label="{{ __('pagination.previous') }}">
                    <i class="bi bi-chevron-left font-bold text-white"></i>
                </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <span aria-disabled="true">
                    <span class="relative inline-flex items-center px-4 py-2  text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <a class="px-2 py-1 border-2 border-primary rounded size-8 flex items-center justify-center text-primary font-bold " aria-current="page">
                    {{ $page }}
                </a>
                @else
                <a href="{{ $url }}" class=" px-2 py-1 bg-primary rounded size-8 flex items-center justify-center text-white font-bold" aria-label=" {{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                </a>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-2 bg-primary flex rounded-full items-center justify-center" aria-label="{{ __('pagination.next') }}">
                    <i class="bi bi-chevron-right font-bold text-white"></i>

                </a>
                @else
                <a class="px-2 bg-primary/50 flex rounded-full items-center justify-center" aria-label="{{ __('pagination.next') }}">
                    <i class="bi bi-chevron-right font-bold text-gray-200"></i>
                </a>
                @endif
            </span>
        </div>
    </div>
</nav>
@endif