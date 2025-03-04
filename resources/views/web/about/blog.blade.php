@extends('layouts.web')
@section('title')
    Blog Page
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-blue-800 mb-10 text-center">HAITRAC Blog</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Innovations in Nursing Education</h2>
                        <p class="text-gray-600 mb-4">Exploring the latest technological advancements transforming healthcare
                            training and patient care.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">15 July 2025</span>
                            <a href="#" class="text-blue-600 hover:underline">Read More</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Tech Trends in Education</h2>
                        <p class="text-gray-600 mb-4">How emerging technologies are reshaping technical education and
                            professional skill development.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">22 August 2025</span>
                            <a href="#" class="text-blue-600 hover:underline">Read More</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Community Impact Programs</h2>
                        <p class="text-gray-600 mb-4">Highlighting our student-led initiatives that make a difference in
                            local communities.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">05 September 2025</span>
                            <a href="#" class="text-blue-600 hover:underline">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
