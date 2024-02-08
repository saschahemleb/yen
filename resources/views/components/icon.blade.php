@props(['icon', 'size' => '6'])

@php
    $size = match ($size) {
        '5' => 'h-5 w-5',
        '6' => 'h-6 w-6',
        '24' => 'h-24 w-24',
        '36' => 'h-36 w-36',
        '48' => 'h-48 w-48',
    };
@endphp

<svg {{ $attributes->class($size) }} viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1" fill="none"
     stroke-linecap="round" stroke-linejoin="round">
    @switch($icon)
        @case('logo')
            @break

        @case('user')
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
            @break

        @case('menu')
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
            @break

        @case('message-square')
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            @break

        @case('slash')
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
            @break

        @case('zap')
            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
            @break

        @case('upload')
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
            <polyline points="17 8 12 3 7 8"></polyline>
            <line x1="12" y1="3" x2="12" y2="15"></line>
            @break

        @case('activity')
            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
            @break

        @default
            @php throw new \RuntimeException(sprintf('Unknown icon %s', $icon)); @endphp
    @endswitch
</svg>
