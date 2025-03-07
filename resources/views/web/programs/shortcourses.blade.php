@extends('layouts.web')
@section('title')
    Short Courses
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-4xl font-bold text-blue-900 mb-8 text-center">
                    Short Courses & Professional Development
                </h1>

                <div class="grid md:grid-cols-3 gap-6">
                    @php
                        $courses = [
                            [
                                'title' => 'Digital Marketing',
                                'duration' => '3 Months',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
                            ],
                            [
                                'title' => 'Web Development',
                                'duration' => '4 Months',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>',
                            ],
                            [
                                'title' => 'Project Management',
                                'duration' => '2 Months',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>',
                            ],
                        ];
                    @endphp

                    @foreach ($courses as $course)
                        <div class="bg-white shadow-2xl rounded-xl p-6 text-center transform transition hover:scale-105">
                            <svg class="w-16 h-16 mx-auto text-secondary mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                {!! $course['icon'] !!}
                            </svg>
                            <h2 class="text-xl font-semibold text-blue-800 mb-3">
                                {{ $course['title'] }}
                            </h2>
                            <p class="text-gray-600 mb-4">
                                Duration: {{ $course['duration'] }}
                            </p>
                            <a href="{{ route('web.apply') }}"
                                class="bg-secondary text-white px-6 py-2 rounded-full hover:bg-secondary-700 transition-colors">
                                Enroll Now
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12 bg-white shadow-2xl rounded-xl p-8">
                    <h2 class="text-2xl font-semibold text-secondary-700 mb-6 text-center">
                        Why Choose Our Short Courses?
                    </h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-green-500 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="font-semibold text-blue-800 mb-2">Flexible Learning</h3>
                            <p class="text-gray-600">Convenient schedules to fit your lifestyle</p>
                        </div>
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-green-500 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                                </path>
                            </svg>
                            <h3 class="font-semibold text-blue-800 mb-2">Expert Instructors</h3>
                            <p class="text-gray-600">Learn from industry professionals</p>
                        </div>
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-green-500 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="font-semibold text-blue-800 mb-2">Career Boost</h3>
                            <p class="text-gray-600">Enhance your professional skills</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
