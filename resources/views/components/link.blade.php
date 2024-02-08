@php
    $type = match ($type ?? 'primary') {
        'secondary' => 'border-zinc-400 dark:border-zinc-700',
        default =>  'border-orange-300 dark:border-orange-600',
    };
@endphp

<a {{ $attributes->merge(['class' => "$type bg-white text-center relative inline-flex border focus:outline-none w-full sm:w-auto px-4 py-2 transition transition-transform hover:-translate-y-0.5 hover:shadow-md focus:-translate-y-0.5 focus:shadow-md dark:bg-zinc-900"]) }}>
    <span class="w-full text-center inline-flex flex-row gap-2 items-center">{{ $slot }}</span>
</a>
