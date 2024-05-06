@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-neutral-400
               text-sm font-medium leading-5 text-neutral-300
               focus:outline-none focus:border-neutral-50
               transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent
               text-sm font-medium leading-5 text-neutral-300
               hover:text-neutral-100 hover:border-neutral-100
               focus:outline-none focus:text-neutral-200 focus:border-neutral-300
               transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
