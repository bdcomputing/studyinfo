@extends('layouts.web')
@section('title')
    Events
@endsection

@section('content')
    <div class="bg-white min-h-screen">
        {{-- Hero Section --}}
        <div class="w-full h-52 bg-cover bg-center mx-auto bg-black bg-opacity-50 mb-10 relative"
            style="background-image: url('{{ asset('/assets/images/event.png') }}')">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="w-full h-full flex items-center container mx-auto relative px-5">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white">Upcoming Events & Workshops</h1>
            </div>
        </div>

        {{-- Events Grid --}}
        <div class="container mx-auto px-5">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
                @php
                    $events = [
                        [
                            'image' => 'nursing.jpg',
                            'title' => 'Healthcare Innovation Summit',
                            'description' =>
                                'A comprehensive workshop exploring cutting-edge technologies in healthcare delivery and patient management.',
                            'date' => '15 July 2025',
                            'time' => '9:00 AM - 4:00 PM',
                        ],
                        [
                            'image' => 'technical-program.jpg',
                            'title' => 'ICT Career Expo',
                            'description' =>
                                'Network with top IT companies and explore career opportunities in the rapidly evolving tech landscape.',
                            'date' => '22 August 2025',
                            'time' => '9:00 AM - 4:00 PM',
                        ],
                        [
                            'image' => 'about.jpg',
                            'title' => 'Technical Skills Workshop',
                            'description' =>
                                'Hands-on training for mechanical and technical professionals looking to upgrade their skillset.',
                            'date' => '05 September 2025',
                            'time' => '9:00 AM - 4:00 PM',
                        ],
                    ];
                @endphp

                @foreach ($events as $event)
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('/assets/images/' . $event['image']) }}" alt="{{ $event['title'] }}"
                                class="w-full h-full object-cover transition duration-300 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <h2 class="text-lg font-extrabold text-gray-800 line-clamp-1">{{ $event['title'] }}</h2>
                            </div>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $event['description'] }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500 font-bold">{{ $event['date'] }}</span>
                                <span class="text-sm text-gray-500 font-bold">{{ $event['time'] }}</span>
                            </div>
                            <div class="mt-4 text-left">
                                <a href="#"
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
