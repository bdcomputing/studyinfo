@extends('layouts.web')
@section('title')
    All Programs
@endsection

@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-blue-900 mb-12 text-center">
                Our Academic Programs
            </h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $programs = [
                        [
                            'title' => 'Nursing',
                            'description' => 'Comprehensive healthcare training with practical clinical experience.',
                            'route' => 'nursing',
                        ],
                        [
                            'title' => 'ICT',
                            'description' => 'Cutting-edge technology and software development programs.',
                            'route' => 'ict',
                        ],
                        [
                            'title' => 'Mechanical Engineering',
                            'description' => 'Advanced technical training with industry-relevant skills.',
                            'route' => 'mech-engineering',
                        ],
                        [
                            'title' => 'Short Courses',
                            'description' => 'Flexible, skill-focused training for quick professional development.',
                            'route' => 'shortcourses',
                        ],
                    ];
                @endphp

                @foreach ($programs as $program)
                    <div class="bg-white shadow-2xl rounded-xl overflow-hidden transform transition hover:scale-105">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-blue-800 mb-4">
                                {{ $program['title'] }}
                            </h2>
                            <p class="text-gray-600 mb-6">
                                {{ $program['description'] }}
                            </p>
                            <a href="{{ route($program['route']) }}"
                                class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors">
                                Learn More
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
