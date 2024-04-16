@php
$active = $route === $_SERVER['REQUEST_URI'];
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-yellow-200 text-sm font-bold leading-5 text-[#5eb6dc] focus:outline-none focus:border-yellow-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-[#4d7ecc] hover:text-[#5eb6dc] hover:border-yellow-200 focus:outline-none focus:text-[#5eb6dc] focus:border-yellow-200 transition duration-150 ease-in-out';
@endphp
<a href="{{ $route }}" title="{{ $text }}" class="{{ $classes }}">
    {{ $text }}
</a>
