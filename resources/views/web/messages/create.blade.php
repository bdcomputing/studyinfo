@extends('layouts.web')
@section('title')
Send Message
@endsection

@section('content')
<section>
    <div class="container mx-auto p-5">
        <div class="md:p-5">
            <form action="{{route('web.messages.create')}}" method="post">
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full"
                        type="password"
                        name="email" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full"
                        type="password"
                        name="email" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full"
                        type="password"
                        name="email" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full"
                        type="password"
                        name="email" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class=" py-3">
                    <x-primary-button class="w-full">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>

</section>
@endsection