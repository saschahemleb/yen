@props(['href'])

@php
    $classes = request()->fullUrlIs($href)
                ? 'border-zinc-400'
                : 'text-zinc-500 hover:border-zinc-300';
@endphp

<a {{ $attributes->merge([
    'href' => $href,
    'class' => "block pl-4 transition-all duration-125 ease-in-out border-l border-transparent hover:pl-6 focus:pl-6 outline-none $classes"
]) }}>
    {{ $slot }}
</a>
