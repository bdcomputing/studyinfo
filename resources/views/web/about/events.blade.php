@extends('layouts.web')
@section('title')
    Events
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen">
        <div class="w-full h-64 bg-cover bg-center mx-auto bg-black bg-opacity-50 mb-10"
            style="background-image: url('{{ asset('/assets/images/event.png') }}')">
            <div class="w-full h-full flex items-center justify-center container mx-auto bg-black bg-opacity-50 ">
                <h1 class="text-5xl font-extrabold text-white">Upcoming Events & Workshops</h1>
            </div>
        </div>
        <div class="container mx-auto px-4">


            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('/assets/images/nursing.jpg') }}" alt="Nursing Program"
                            class="w-full h-full object-cover transition duration-300 hover:scale-110">
                    </div>
                    <div class="p-5">
                        <div class="flex items-center mb-4">
                            <h2 class="text-md font-extrabold text-gray-800 line-clamp-1">Healthcare Innovation Summit</h2>
                        </div>
                        <p class="text-gray-600 mb-4 line-clamp-2">A comprehensive workshop exploring cutting-edge
                            technologies in
                            healthcare delivery and patient management.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500 font-bold">15 July 2025</span>
                            <span class="text-sm text-gray-500 font-bold">9:00 AM - 4:00 PM</span>
                        </div>
                        <div class="mt-4 text-left">
                            <a href="#"
                                class="inline-flex items-center px-6 py-2 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('/assets/images/technical-program.jpg') }}" alt="Nursing Program"
                            class="w-full h-full object-cover transition duration-300 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">

                            <h2 class="text-md font-extrabold text-gray-800 line-clamp-1">ICT Career Expo</h2>
                        </div>
                        <p class="text-gray-600 mb-4 line-clamp-2">Network with top IT companies and explore career
                            opportunities in the
                            rapidly evolving tech landscape.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500 font-bold">22 August 2025</span>
                            <span class="text-sm text-gray-500 font-bold">9:00 AM - 4:00 PM</span>
                        </div>
                        <div class="mt-4 text-left">
                            <a href="#"
                                class="inline-flex items-center px-6 py-2 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('/assets/images/about.jpg') }}" alt="Nursing Program"
                            class="w-full h-full object-cover transition duration-300 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <h2 class="text-md font-extrabold text-gray-800 line-clamp-1">Technical Skills Workshop</h2>
                        </div>
                        <p class="text-gray-600 mb-4 line-clamp-2">Hands-on training for mechanical and technical
                            professionals looking
                            to upgrade their skillset.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500 font-bold">05 September 2025</span>
                            <span class="text-sm text-gray-500 font-bold">9:00 AM - 4:00 PM</span>
                        </div>
                        <div class="mt-4 text-left">
                            <a href="#"
                                class="inline-flex items-center px-6 py-2 bg-primary-600 text-white rounded-full hover:bg-primary-700 transition">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
