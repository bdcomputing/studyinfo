@extends('layouts.web')
@section('title')
{{ $event->title }}
@endsection

@section('content')
<div class="bg-white min-h-screen">


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
        <div class="p-5">
            <p class="text-xl md:text-2xl font-bold">{{$event->title}}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5  w-full">
            <div class="md:p-5">
                <div class="h-80 p-5 overflow-hidden ">
                    <img src="{{ asset('storage/' . $event->image) }}" class="rounded-md  object-cover w-full" alt="{{ $event->title }}">


                </div>
                <div class=" md:p-6 mb-6 py-5">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">About This Event</h2>
                    <div class="prose max-w-none text-gray-600">
                        {!! nl2br(e($event->description)) !!}
                    </div>
                </div>
            </div>
            <div class=" p-5">
                <div class="md:p-5">
                    <div class="bg-white ">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Event Details</h3>

                        <div class="mb-4">
                            <div class="flex items-center text-primary gap-2">
                                <i class="bi bi-calendar3"></i>
                                <span class="font-medium">Date:</span>
                            </div>
                            <div class="ml-7 text-gray-800">{{ $event->formatted_date }}</div>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center text-primary gap-2">
                                <i class="bi bi-clock"></i>
                                <span class="font-medium">Time:</span>
                            </div>
                            <div class="ml-7 text-gray-800">{{ $event->formatted_time }}</div>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center text-primary gap-2">
                                <i class="bi bi-geo-alt text-xl"></i>
                                <span class="font-medium">Location:</span>
                            </div>
                            <div class="ml-7 ">{{ $event->location }}</div>
                        </div>

                        @if ($event->capacity)
                        <div class="mb-6">
                            <div class="flex items-center text-primary gap-2">
                                <i class="bi bi-people text-xl"></i>
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
                                class="inline-block text-center py-1.5 px-6  bg-primary text-white rounded-full hover:bg-primary-900 transition-colors duration-300">
                                Register for this Event
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>
</div>


@endsection