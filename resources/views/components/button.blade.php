@php
    $type = match ($type ?? 'primary') {
        'tertiary' => '',
        'secondary' => 'bg-white border border-zinc-400 hover:shadow-md focus:shadow-md dark:bg-zinc-900 dark:border-zinc-700',
        default =>  'bg-white border border-orange-300 hover:shadow-md focus:shadow-md dark:bg-zinc-900 dark:border-orange-600',
    };
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => "$type text-center relative inline-flex focus:outline-none w-full sm:w-auto px-4 py-2 transition duration-125 transition-transform hover:-translate-y-0.5 focus:-translate-y-0.5"]) }}>
    {{ $slot }}
</button>
