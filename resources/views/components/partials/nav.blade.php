<nav {{ $attributes->merge(['class' => 'h-screen p-5 bg-gradient-to-b from-zinc-200 to-zinc-100 dark:from-zinc-900 dark:to-zinc-900']) }}>
    <div class="flex flex-row justify-around">
        <p class="text-3xl font-semibold select-none">Yen</p>
    </div>

    <div class="mt-5">
        <x-partials.nav-link-group>
            <x-partials.nav-link :href="route('app::dashboard')">{{ __('Dashboard') }}</x-partials.nav-link>
        </x-partials.nav-link-group>
        <x-partials.nav-link-group>
            <x-partials.nav-link :href="route('transaction::list')">{{ __('Transactions') }}</x-partials.nav-link>
{{--            <x-partials.nav-link :href="route('budget::list')">{{ __('Budgets') }}</x-partials.nav-link>--}}
        </x-partials.nav-link-group>
    </div>
</nav>
