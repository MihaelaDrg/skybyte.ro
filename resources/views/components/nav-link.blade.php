@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-3 border-sky_mid_light text-sm font-medium leading-5 text-white  focus:outline-none focus:border-sky_mid_light transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-3 border-transparent text-sm font-bold leading-5 text-white hover:font-black hover:text-sky_light hover:border-sky_light focus:outline-none focus:text-white focus:border-sky_mid_light transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
