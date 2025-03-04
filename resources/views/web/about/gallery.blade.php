@extends('layouts.web')
@section('title')
    Gallery
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-blue-800 mb-10 text-center">Campus Gallery</h1>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/600/400" alt="Nursing Simulation Lab"
                        class="w-full h-64 object-cover hover:scale-110 transition duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Nursing Simulation Lab</h3>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/600/400" alt="ICT Computer Lab"
                        class="w-full h-64 object-cover hover:scale-110 transition duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">ICT Computer Lab</h3>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/600/400" alt="Technical Workshop"
                        class="w-full h-64 object-cover hover:scale-110 transition duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Technical Workshop</h3>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Our state-of-the-art facilities provide students with hands-on learning environments that simulate
                    real-world professional settings, ensuring comprehensive practical training across all our programs.
                </p>
            </div>
        </div>
    </div>
@endsection
