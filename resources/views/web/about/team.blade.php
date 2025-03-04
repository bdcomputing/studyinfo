@extends('layouts.web')
@section('title')
    Team
@endsection
@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-blue-800 mb-10 text-center">Our Leadership Team</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/400/400" alt="Dr. Cheruiyot" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h2 class="text-xl font-semibold text-gray-800">Dr. Cheruiyot</h2>
                        <p class="text-gray-600 mb-2">Board Chair</p>
                        <p class="text-sm text-gray-500">Strategic leadership and educational innovation expert</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/400/400" alt="Mr. Kiplagat" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h2 class="text-xl font-semibold text-gray-800">Mr. Kiplagat</h2>
                        <p class="text-gray-600 mb-2">CEO</p>
                        <p class="text-sm text-gray-500">Visionary leader driving institutional growth</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/400/400" alt="Ms. Kapkiyai" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h2 class="text-xl font-semibold text-gray-800">Ms. Kapkiyai</h2>
                        <p class="text-gray-600 mb-2">Director</p>
                        <p class="text-sm text-gray-500">Dedicated to student development and educational excellence</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Our Team's Vision</h2>
                <p class="text-gray-600 text-center max-w-2xl mx-auto">
                    At HAITRAC, our leadership team is committed to transforming education through innovation, practical
                    training, and a deep commitment to student success. We believe in empowering students to become leaders,
                    problem-solvers, and change-makers in their respective fields.
                </p>
            </div>
        </div>
    </div>
@endsection
