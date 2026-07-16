<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-black">Selamat Datang</h2>
        <span class="text-gray-500 mt-2">Silakan masuk ke dashboard admin</span>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold mt-4" />
            <x-text-input id="email"
                class="block mt-2 mb-2 w-full border-gray-200 rounded-xl focus:border-green-500 focus:ring-green-500 transition duration-200"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                placeholder="admin@ponpes.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />
            <x-text-input id="password"
                class="block mt-2 w-full border-gray-200 rounded-xl focus:border-green-500 focus:ring-green-500 transition duration-200"
                type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-green-600 focus:ring-green-500 shadow-sm" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-green-600 hover:text-green-800 font-medium transition"
                    href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <div class="mt-6">
            <x-primary-button
                class="w-full flex justify-center py-3 bg-green-600 hover:bg-green-700 rounded-xl shadow-lg shadow-green-500/30">
                {{ __('Masuk ke Dashboard') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
