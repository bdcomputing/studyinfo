@extends('layouts.web')
@section('title')
    ICT
@endsection
@section('content')
    <div class="bg-gradient-to-br from-primary-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-4xl font-bold text-primary-900 mb-8 text-center">
                    ICT & Technology Programs
                </h1>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white shadow-2xl rounded-xl p-6 text-center">
                        <svg class="w-16 h-16 mx-auto text-primary-600 mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <h2 class="text-xl font-semibold text-primary-800 mb-3">
                            Software Development
                        </h2>
                        <p class="text-gray-600">
                            Learn cutting-edge programming languages and develop innovative software solutions.
                        </p>
                    </div>

                    <div class="bg-white shadow-2xl rounded-xl p-6 text-center">
                        <svg class="w-16 h-16 mx-auto text-primary-600 mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <h2 class="text-xl font-semibold text-primary-800 mb-3">
                            Network Administration
                        </h2>
                        <p class="text-gray-600">
                            Master network infrastructure, security, and cloud computing technologies.
                        </p>
                    </div>

                    <div class="bg-white shadow-2xl rounded-xl p-6 text-center">
                        <svg class="w-16 h-16 mx-auto text-primary-600 mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3
                            .895 3 2-1.343 2-3 2zm0 0c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m-3-8c-1.11 0-2.08.402-2.599 1">
                            </path>
                        </svg>
                        <h2 class="text-xl font-semibold text-primary-800 mb-3">
                            Cybersecurity
                        </h2>
                        <p class="text-gray-600">
                            Develop skills to protect digital assets and defend against cyber threats.
                        </p>
                    </div>
                </div>

                <div class="mt-12 bg-white shadow-2xl rounded-xl p-8">
                    <h2 class="text-2xl font-semibold text-primary-700 mb-6">
                        Program Curriculum Highlights
                    </h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-bold text-primary-800 mb-4">Technical Skills</h3>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Python Programming
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Web Development
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Cloud Computing
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary-800 mb-4">Professional Skills</h3>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Project Management
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    IT Consulting
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Digital Strategy
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center mt-8">
                        <a href="{{ route('web.apply') }}"
                            class="bg-primary-600 text-white px-8 py-3 rounded-full hover:bg-primary-700 transition-colors text-lg font-semibold">
                            Explore ICT Programs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
