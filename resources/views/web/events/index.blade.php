@extends('layouts.web')
@section('title')
    Events
@endsection

@section('content')
    <div class="bg-white min-h-screen">

        {{-- Events Grid --}}
        <div class="container mx-auto px-5 py-10">
            <div class="p-5">
                <p class="font-bold text-xl md:text-2xl">Our Upcoming Events</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
                @forelse ($events as $event)
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ $event->image_url }}" alt="{{ $event->title }}"
                                class="w-full h-full object-cover transition duration-300 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <h2 class="text-lg font-extrabold text-gray-800 line-clamp-1">{{ $event->title }}</h2>
                            </div>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $event->description }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500 font-bold">{{ $event->formatted_date }}</span>
                                <span class="text-sm text-gray-500 font-bold">{{ $event->formatted_time }}</span>
                            </div>
                            <div class="mt-4 text-left">
                                <a href="{{ route('web.events.show', $event->id) }}"
                                    class="inline-flex items-center px-6 py-2 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition-colors duration-300">
                                    View More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-10">
                        <div class="text-2xl text-gray-500 mb-4">No upcoming events at the moment</div>
                        <p class="text-gray-600">Please check back soon for new events and workshops!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
