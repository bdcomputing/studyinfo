@extends('layouts.web')
@section('title')
    Our Faculty
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-primary-800 mb-10 text-center">Our Distinguished Faculty</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition hover:scale-105">
                    <img src="/api/placeholder/400/400" alt="Dr. Cheruiyot" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Dr. Cheruiyot</h2>
                        <p class="text-gray-600 mb-2">Board Chair</p>
                        <p class="text-sm text-gray-500">Expert in higher education leadership with extensive experience in
                            strategic institutional development.</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition hover:scale-105">
                    <img src="/api/placeholder/400/400" alt="Mr. Kiplagat" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Mr. Kiplagat</h2>
                        <p class="text-gray-600 mb-2">CEO</p>
                        <p class="text-sm text-gray-500">Visionary leader driving innovation in education and institutional
                            growth.</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition hover:scale-105">
                    <img src="/api/placeholder/400/400" alt="Ms. Kapkiyai" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Ms. Kapkiyai</h2>
                        <p class="text-gray-600 mb-2">Director</p>
                        <p class="text-sm text-gray-500">Dedicated to enhancing educational quality and student development.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Our Faculty Commitment</h2>
                <p class="text-gray-600 leading-relaxed">
                    At HAITRAC, our faculty comprises professionals with diverse backgrounds in Nursing, ICT, and technical
                    fields. They bring a wealth of industry experience, combining academic expertise with practical
                    insights. Our instructors are committed to providing students with hands-on training, mentorship, and
                    innovative teaching methods that prepare them for real-world challenges.
                </p>
            </div>
        </div>
    </div>
@endsection
