@extends('layouts.web')
@section('title')
    Gallery
@endsection

@section('content')
    <div class="w-full h-72 bg-cover bg-center mx-auto bg-black bg-opacity-50 relative"
        style="background-image: url('{{ asset('/assets/images/gallery.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="w-full h-full flex flex-col items-center justify-center container mx-auto relative px-5">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white">Campus Gallery</h1>
            <p class="text-white text-center max-w-2xl">Explore our vibrant campus life through these images.</p>
        </div>
    </div>

    <div class="bg-gradient-to-br from-primary-50 to-white min-h-screen py-16">
        <div class="container mx-auto px-5">
            <div class="max-w-7xl mx-auto">
                @php
                    $galleries = [
                        [
                            'image' => 'nursing.jpg',
                            'title' => 'Nursing Simulation Lab',
                            'description' =>
                                'State-of-the-art nursing simulation facility for hands-on medical training',
                        ],
                        [
                            'image' => 'technical-program.jpg',
                            'title' => 'ICT Computer Lab',
                            'description' => 'Modern computer lab equipped with the latest technology and software',
                        ],
                        [
                            'image' => 'about.jpg',
                            'title' => 'Technical Workshop',
                            'description' => 'Fully equipped workshop for practical technical and mechanical training',
                        ],
                        [
                            'image' => 'grad.jpg',
                            'title' => 'Student Center',
                            'description' => 'Collaborative space for student activities and group projects',
                        ],
                        [
                            'image' => 'event.png',
                            'title' => 'Conference Hall',
                            'description' => 'Multi-purpose venue for events, seminars and professional gatherings',
                        ],
                        [
                            'image' => 'contact.png',
                            'title' => 'Library & Resource Center',
                            'description' => 'Well-stocked library with digital and print learning resources',
                        ],
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($galleries as $gallery)
                        <div
                            class="bg-white shadow-lg rounded-lg overflow-hidden group hover:shadow-2xl transition-all duration-300">
                            <div class="h-64 overflow-hidden">
                                <img src="{{ asset('/assets/images/' . $gallery['image']) }}" alt="{{ $gallery['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $gallery['title'] }}</h3>
                                <p class="text-gray-600">{{ $gallery['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-16 text-center">
                    <p class="text-gray-700 max-w-3xl mx-auto text-lg">
                        Our modern facilities are designed to provide students with immersive learning environments that
                        mirror
                        professional settings. Each space is thoughtfully equipped to support hands-on training and
                        practical
                        skill development across all our academic programs.
                    </p>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center space-x-2 mt-12">
                    <a href="#"
                        class="px-4 py-2 rounded-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>

                    <a href="#" class="px-4 py-2 rounded-full bg-primary-600 text-white hover:bg-primary-700">1</a>
                    <a href="#"
                        class="px-4 py-2 rounded-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-700">2</a>
                    <a href="#"
                        class="px-4 py-2 rounded-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-700">3</a>

                    <span class="px-4 py-2 text-gray-600">...</span>

                    <a href="#"
                        class="px-4 py-2 rounded-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-700">8</a>
                    <a href="#"
                        class="px-4 py-2 rounded-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-700">9</a>
                    <a href="#"
                        class="px-4 py-2 rounded-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-700">10</a>

                    <a href="#"
                        class="px-4 py-2 rounded-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
