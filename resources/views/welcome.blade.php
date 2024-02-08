<x-layouts.guest title="円">
    <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
        <h1 class="max-w-3xl mx-auto text-5xl font-bold text-center md:text-6xl lg:text-7xl">Personal finances
            <br class="hidden lg:inline"><span class="text-orange-300">like a boss</span></h1>
        <p class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10">
            Yen helps you get a grip on your personal finances. Track your transactions and
            create budgets ー identifying the biggest spender makes saving money a breeze!</p>
        <div class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
            @guest
            <x-link :href="route('auth::register')">Register Now</x-link>
            <x-link :href="route('auth::login')" type="secondary">Login</x-link>
            @endguest
            @auth
                <x-link :href="route('app::dashboard')">Go to Dashboard</x-link>
            @endauth
        </div>
    </section>
</x-layouts.guest>
