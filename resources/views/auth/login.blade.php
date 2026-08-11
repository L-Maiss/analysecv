<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <a
    href="{{ route('google.login') }}"
    class="w-full flex items-center justify-center gap-3 rounded-lg border border-gray-300 bg-white px-4 py-3 hover:bg-gray-50 transition"
    >
        <img
            src="https://www.svgrepo.com/show/475656/google-color.svg"
            class="w-5 h-5"
        >

        Continue with Google
    </a>

    <div class="flex items-center justify-center my-4">
        <span class="border-b border-gray-300 w-full"></span>
        <span class="mx-2 text-gray-500">or</span>
        <span class="border-b border-gray-300 w-full"></span>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex justify-center items-center gap-1">
            <span>{{ __("Don't have an account?") }}</span>
            <a class="text-[#7C53EC]" href="{{ route('register') }}">
                {{ __(' Sign up') }}
            </a>
        </div>         
        
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
