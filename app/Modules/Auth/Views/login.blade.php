<x-layouts.guest title="Login">
    <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
        <x-card class="max-w-xl mx-auto">
            <form class="max-w-xl mx-auto" method="POST" action="{{ route('auth::login') }}">
                @csrf

                <div>
                    <x-forms.input :label="__('Email')" :messages="$errors->get('email')"
                                   id="email" type="email" name="email" :value="old('email')" required autocomplete="username"/>
                </div>

                <div class="mt-4">
                    <x-forms.input :label="__('Password')" :messages="$errors->get('password')"
                                   id="password" type="password" name="password" required autocomplete="current-password"/>
                </div>

                <div class="flex items-center justify-end gap-4 mt-4">
                    <x-link type="secondary" :href="route('auth::register')">{{ __('Need an account?') }}</x-link>
                    <x-button>{{ __('Login') }}</x-button>
                </div>
            </form>
        </x-card>
    </section>
</x-layouts.guest>
