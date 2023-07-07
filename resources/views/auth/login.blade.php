<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="col-3 mx-auto">
        @csrf

        <!-- Email Address -->
        <div class="row">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1" type="email" name="email" :value="old('email')"  autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        </div>

        <!-- Password -->
        <div class="row mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <div class="d-md-flex mt-4 justify-content-between">
            @if (Route::has('password.request'))
                <a class="fs-5 text-decoration-none" href="{{ route('password.request') }}">
                    {{ __('Has olvidado la contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
