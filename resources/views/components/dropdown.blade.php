@props(['align' => 'right'])

@php
$align = [
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    'right' => 'ltr:origin-top-right rtl:origin-top-left end-0'
][$align];
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <x-button @click="open = ! open" type="tertiary">
        {{ $trigger }}
    </x-button>
    <div x-show="open"
         x-transition:enter="transition ease-out duration-125"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-125"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="absolute z-50 mt-2 w-48 shadow-md {{ $align }}"
         style="display: none;"
         @click="open = false">
        <div class="border border-zinc-400 bg-white px-4 py-2">
            {{ $slot }}
        </div>
    </div>
</div>
