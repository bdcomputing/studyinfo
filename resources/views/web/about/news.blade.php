@extends('layouts.web')
@section('title')
    News
@endsection
@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-blue-800 mb-10 text-center">Latest News & Updates</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Community Healthcare Initiative</h2>
                        <p class="text-gray-600 mb-4">HAITRAC nursing students successfully launched a community healthcare
                            program, providing free medical checkups to over 5,000 residents in underserved areas.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">15 July 2025</span>
                            <a href="#" class="text-blue-600 hover:underline">Read More</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Tech Innovation Breakthrough</h2>
                        <p class="text-gray-600 mb-4">Our ICT students develop groundbreaking mobile application simplifying
                            access to government services in rural Kenya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">22 August 2025</span>
                            <a href="#" class="text-blue-600 hover:underline">Read More</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">International Recognition</h2>
                        <p class="text-gray-600 mb-4">HAITRAC receives accolades from international education boards for
                            innovative training programs and student success rates.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">05 September 2025</span>
                            <a href="#" class="text-blue-600 hover:underline">Read More</a>
                        </div>
                    </div>
                </article>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Stay updated with the latest developments, achievements, and innovative initiatives from HAITRAC. Our
                    commitment to excellence continues to drive positive change in education and community impact.
                </p>
            </div>
        </div>
    </div>
@endsection
