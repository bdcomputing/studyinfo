@extends('layouts.web')
@section('title')
    Events
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-primary-800 mb-10 text-center">Upcoming Events & Workshops</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 text-primary-800 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Healthcare Innovation Summit</h2>
                        </div>
                        <p class="text-gray-600 mb-4">A comprehensive workshop exploring cutting-edge technologies in
                            healthcare delivery and patient management.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">15 July 2025</span>
                            <a href="#"
                                class="bg-primary-600 text-white px-3 py-1 rounded hover:bg-primary-700 transition">Register</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-100 text-green-800 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m7.5 0A9 9 0 1112 3a9 9 0 016.5 3.5z"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">ICT Career Expo</h2>
                        </div>
                        <p class="text-gray-600 mb-4">Network with top IT companies and explore career opportunities in the
                            rapidly evolving tech landscape.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">22 August 2025</span>
                            <a href="#"
                                class="bg-primary-600 text-white px-3 py-1 rounded hover:bg-primary-700 transition">Register</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-purple-100 text-purple-800 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Technical Skills Workshop</h2>
                        </div>
                        <p class="text-gray-600 mb-4">Hands-on training for mechanical and technical professionals looking
                            to upgrade their skillset.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">05 September 2025</span>
                            <a href="#"
                                class="bg-primary-600 text-white px-3 py-1 rounded hover:bg-primary-700 transition">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
