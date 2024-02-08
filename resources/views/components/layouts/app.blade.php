<x-layouts.html {{ $attributes->merge(['class' => 'flex flex-col']) }}>
    <section class="flex flex-row">
        <x-partials.nav class="min-w-48"/>
        <div class="grow p-5 px-10 flex flex-col">
            <header class="min-w-full flex flex-row justify-end items-center gap-4">
                @if ($numberOfImportsRunning > 0)
                <x-tooltip>
                    <x-slot:trigger>
                        <x-icon icon="activity" class="text-orange-300 cursor-help" />
                    </x-slot:trigger>

                    Transaction import running...
                </x-tooltip>
                @endif
                <x-dropdown>
                    <x-slot:trigger>
                        <x-icon icon="user"/>
                    </x-slot:trigger>

                    <x-dropdown-link :href="route('auth::logout')">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </x-dropdown>
            </header>
            <main class="mt-5">
                {{ $slot }}
            </main>
        </div>
    </section>
</x-layouts.html>
