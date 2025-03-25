<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="text-center font-semibold  text-gray-600  pb-8  ">Login to your account.</div>
    <form method="POST" action="{{ route('login') }}" class="flex flex-col w-full">
        @csrf
        <div class="pb-2">
            <x-input-label for="email" :value="__('Email')" />
            <div class="relative text-gray-400">
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
        <div class="pb-6">
            <x-input-label for="password" :value="__('Password')" />
            <div class="relative text-gray-400">
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="py-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600  hover:text-primary  rounded-md  "
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <x-primary-button class="bg-primary">
            {{ __('Log in') }}
        </x-primary-button>
        <!-- <div class="text-sm py-5 font-light text-[#6B7280] ">Don't have an accout yet? <a href="" class="font-medium  hover:underline">Sign Up</a>
        </div> -->
    </form>


</x-guest-layout>
