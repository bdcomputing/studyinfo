@extends('layouts.web')
@section('title')
{{ $event->title }}
@endsection

@section('content')
<div class="bg-white min-h-screen">
    {{-- Hero Section --}}
    <div class="w-full h-52 bg-cover bg-center mx-auto bg-black bg-opacity-50 mb-10 relative"
        style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : asset('/assets/images/event.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="w-full h-full flex items-center container mx-auto relative px-5">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white">{{ $event->title }}</h1>
        </div>
    </div>

    {{-- Event Details --}}
    <div class="container mx-auto px-5 py-10">
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6"
            role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif

        <div class="flex flex-col md:flex-row gap-10">
            <div class="md:w-2/3">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">About This Event</h2>
                    <div class="prose max-w-none text-gray-600">
                        {!! nl2br(e($event->description)) !!}
                    </div>
                </div>
            </div>

            <div class="md:w-1/3">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Event Details</h3>

                    <div class="mb-4">
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="font-medium">Date:</span>
                        </div>
                        <div class="ml-7 text-gray-800">{{ $event->formatted_date }}</div>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="font-medium">Time:</span>
                        </div>
                        <div class="ml-7 text-gray-800">{{ $event->formatted_time }}</div>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-medium">Location:</span>
                        </div>
                        <div class="ml-7 text-gray-800">{{ $event->location }}</div>
                    </div>

                    @if ($event->capacity)
                    <div class="mb-6">
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            <span class="font-medium">Capacity:</span>
                        </div>
                        <div class="ml-7 text-gray-800">
                            @if ($event->is_full)
                            <span class="text-red-600 font-bold">FULL</span>
                            @else
                            <span class="text-green-600">{{ $event->spots_left }} spots remaining</span>
                            @endif
                        </div>
                    </div>
                    @endif

                    <div class="mt-6">
                        @if ($event->is_full)
                        <button class="w-full py-3 px-6 bg-gray-400 text-white rounded-full cursor-not-allowed"
                            disabled>
                            Event Is Full
                        </button>
                        @else
                        <a href="{{ route('web.events.event-register', $event->id) }}"
                            class="inline-block w-full text-center py-3 px-6 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition-colors duration-300">
                            Register for this Event
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection