@extends('layouts.web')
@section('title')
    Team
@endsection
@section('content')
    <div class="bg-blue-950 min-h-screen py-24 md:py-32"
        style="background-image: url('{{ asset('/assets/svg/bg-curvy-lines.svg') }}'); background-size: cover;">
        <div class="container mx-auto px-4">
            <div class="mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-primary-50 mb-6 text-center">Our Leadership Team</h1>
                <p class="text-lg text-primary-50/90 text-center max-w-4xl mx-auto leading-relaxed">
                    The visionary leadership team behind HAITRAC comprises education and industry experts dedicated to
                    bridging the skills gap and empowering students to succeed in their careers. Our leaders foster a
                    culture of innovation and excellence, ensuring our institution continues to thrive and grow.
                </p>
            </div>

            <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-8">
                @php
                    $leaders = [
                        [
                            'name' => 'Dr. Cheruiyot',
                            'image' => '/api/placeholder/400/400',
                            'role' => 'Board Chair',
                            'description' => 'Leading innovation in educational excellence always',
                            'object_fit' => 'cover',
                        ],
                        [
                            'name' => 'Mr. Kiplagat',
                            'image' => '/assets/leadership/a1.png',
                            'role' => 'CEO',
                            'description' => 'Driving growth through visionary leadership skills',
                            'object_fit' => 'contain',
                        ],
                        [
                            'name' => 'Ms. Kapkiyai',
                            'image' => '/assets/leadership/a5.png',
                            'role' => 'Director',
                            'description' => 'Championing student success and academic growth',
                            'object_fit' => 'contain',
                        ],
                        [
                            'name' => 'Mr. Chirchir',
                            'image' => '/assets/leadership/a4.png',
                            'role' => 'Board Member',
                            'description' => 'Empowering students to achieve their dreams',
                            'object_fit' => 'contain',
                        ],
                        [
                            'name' => 'Mrs. Cheplong',
                            'image' => '/assets/leadership/a2.png',
                            'role' => 'Board Member',
                            'description' => 'Fostering excellence in education and growth',
                            'object_fit' => 'contain',
                        ],
                        [
                            'name' => 'Dr. Peter',
                            'image' => '/api/placeholder/400/400',
                            'role' => 'Board Member',
                            'description' => 'Strategic planning for educational advancement today',
                            'object_fit' => 'cover',
                        ],
                    ];
                @endphp

                @foreach ($leaders as $leader)
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-64 overflow-hidden">
                            <img src="{{ $leader['image'] }}" alt="{{ $leader['name'] }}"
                                class="w-full h-full object-{{ $leader['object_fit'] }} transition duration-300 hover:scale-105">
                        </div>
                        <div class="p-6 text-center">
                            <h2 class="text-xl font-bold text-blue-950">{{ $leader['name'] }}</h2>
                            <p class="text-gray-600 font-medium mb-2">{{ $leader['role'] }}</p>
                            <p class="text-sm text-gray-500 leading-relaxed">{{ $leader['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-16 bg-white shadow-lg rounded-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-3xl font-bold text-blue-950 mb-6 text-center">Our Team's Vision</h2>
                <p class="text-gray-600 text-center max-w-3xl mx-auto leading-relaxed">
                    At HAITRAC, our leadership team is committed to transforming education through innovation, practical
                    training, and a deep commitment to student success. We believe in empowering students to become leaders,
                    problem-solvers, and change-makers in their respective fields.
                </p>
            </div>
        </div>
    </div>
@endsection
