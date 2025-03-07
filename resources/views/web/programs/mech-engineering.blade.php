@extends('layouts.web')
@section('title')
    Mechanical Engineering
@endsection

@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-4xl font-bold text-blue-900 mb-8 text-center">
                    Mechanical Engineering Programs
                </h1>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white shadow-2xl rounded-xl p-8">
                        <h2 class="text-2xl font-semibold text-secondary-700 mb-6">
                            Program Overview
                        </h2>
                        <p class="text-gray-700 mb-4">
                            Our Mechanical Engineering program provides comprehensive training in design, manufacturing, and
                            innovation. Students gain hands-on experience with cutting-edge technologies and
                            industry-standard tools.
                        </p>
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Advanced CAD Design
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Industrial Automation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Robotics Engineering
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white shadow-2xl rounded-xl p-8">
                        <h2 class="text-2xl font-semibold text-secondary-700 mb-6">
                            Career Pathways
                        </h2>
                        <div class="grid grid-cols-2 gap-5">
                            <div class="bg-blue-50 p-4 rounded-lg text-center">
                                <svg class="w-12 h-12 mx-auto text-secondary mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 01-4.16-4.161l-.477-2.387a2 2 0 00-.547-1.022L6 5m8 8l-5.91-5.91a2 2 0 00-1.414-.586H4.345A1.345 1.345 0 013 6.345v-1.19a1.345 1.345 0 011.345-1.345h1.19a1.345 1.345 0 011.345 1.345V5m8 8l3.586-3.586a2 2 0 00.586-1.414V5a2 2 0 00-2-2h-1.172a2 2 0 01-1.414-.586L9 1.586A2 2 0 007.586 1H4a2 2 0 00-2 2v2.172a2 2 0 00.586 1.414L6 9">
                                    </path>
                                </svg>
                                <h3 class="font-semibold text-blue-800">Manufacturing</h3>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg text-center">
                                <svg class="w-12 h-12 mx-auto text-secondary mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="font-semibold text-blue-800">Robotics</h3>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg text-center">
                                <svg class="w-12 h-12 mx-auto text-secondary mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                </svg>
                                <h3 class="font-semibold text-blue-800">Design</h3>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg text-center">
                                <svg class="w-12 h-12 mx-auto text-secondary mb-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                </svg>
                                <h3 class="font-semibold text-blue-800">Automation</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('web.apply') }}"
                        class="bg-secondary text-white px-8 py-3 rounded-full hover:bg-secondary-700 transition-colors text-lg font-semibold">
                        Apply to Mechanical Engineering
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
