<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="text-sm  text-accent  pb-8 font-semibold ">Login to your account.</div>
    <form method="POST" action="{{ route('login') }}" class="flex flex-col">
        @csrf
        <div class="pb-2">
            <x-input-label for="email" :value="__('Email')" />
            <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg></span>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
        <div class="pb-6">
            <x-input-label for="password" :value="__('Password')" />
            <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-asterisk">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M12 8v8"></path>
                        <path d="m8.5 14 7-4"></path>
                        <path d="m8.5 10 7 4"></path>
                    </svg></span>
                <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="py-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600  hover:text-primary  rounded-md  " href="{{ route('password.request') }}">
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
    <div class="relative flex py-8 items-center">
        <div class="grow border-t border-[1px] border-gray-200"></div> <span class="shrink mx-4 font-medium text-gray-500">OR</span>
        <div class="grow border-t border-[1px] border-gray-200"></div>
    </div>
    <form>
        <div class="flex flex-row gap-2 justify-center">
            <button class="flex flex-row w-32 gap-2 bg-primary p-2 rounded-md text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github">
                    <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                </svg> <span class="font-medium mx-auto">Github</span>

            </button>
            <button class="flex flex-row w-32 gap-2 bg-primary p-2 rounded-md text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter">
                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                </svg> <span class="font-medium mx-auto">Twitter</span>

            </button>
        </div>
    </form>
</x-guest-layout>