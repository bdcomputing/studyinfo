@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 font-bold leading-5 text-primary focus:outline-none transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 font-bold leading-5 text-gray-500 hover:text-gray-700 hover:text-primary transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>