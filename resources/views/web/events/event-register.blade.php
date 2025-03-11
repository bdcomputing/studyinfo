@extends('layouts.web')
@section('title')
Register for {{ $event->title }}
@endsection

@section('content')
<div class="bg-white min-h-screen">
    <div class="w-full h-52 bg-cover bg-center mx-auto bg-black bg-opacity-50 mb-10 relative"
        style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : asset('/assets/images/event.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="w-full h-full flex items-center container mx-auto relative px-5">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-white">Register for Event</h1>
                <p class="text-xl text-white mt-2">{{ $event->title }}</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-5 py-10">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Event Registration</h2>

                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6"
                    role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('web.events.storeRegistration', $event->id) }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-primary-100 focus:border-primary-300">
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-primary-100 focus:border-primary-300">
                    </div>

                    <div class="mb-6">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number
                            (optional)</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-primary-100 focus:border-primary-300">
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('web.events.show', $event->id) }}"
                            class="text-primary-600 hover:text-primary-800">
                            Back to event details
                        </a>
                        <button type="submit"
                            class="px-6 py-2 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition-colors duration-300">
                            Submit Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection