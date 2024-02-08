<x-layouts.app>
    <x-empty-state>
        You don't have any transactions yet.
        <x-slot:cta>
            <x-link :href="route('budget::list')">
                <x-icon icon="upload" size="5" />
                Upload your first transactions
            </x-link>
        </x-slot:cta>
    </x-empty-state>
</x-layouts.app>
