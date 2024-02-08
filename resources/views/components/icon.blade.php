@props(['icon'])

<svg class="h-6 w-6" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
@switch($icon)
    @case('logo')
        @break

    @case('user')
        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
        <circle cx="12" cy="7" r="4"></circle>
        @break

    @case('menu')
        <line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line>
        @break

    @default
        @php throw new \RuntimeException(sprintf('Unknown icon %s', $icon)); @endphp
@endswitch
</svg>
