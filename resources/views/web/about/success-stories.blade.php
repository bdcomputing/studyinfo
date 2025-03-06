@extends('layouts.web')
@section('title')
    Our Success Stories
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-primary-800 mb-10 text-center">Success Stories</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 text-primary-800 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m7.5 0A9 9 0 1112 3a9 9 0 016.5 3.5z"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Valerie Cherunya</h2>
                        </div>
                        <p class="text-gray-600 mb-4">Graduated from HAITRAC's Nursing program in 2022 and secured a
                            position at a leading hospital in Europe. Earned the "Rising Star in Healthcare" award within
                            her first year of practice.</p>
                        <div class="text-sm text-gray-500">Nursing Graduate | Healthcare Professional</div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-100 text-green-800 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Edwin</h2>
                        </div>
                        <p class="text-gray-600 mb-4">Developed a mobile application during his final project that
                            simplifies access to government services in rural areas. His app was featured at the Kenya Tech
                            Summit.</p>
                        <div class="text-sm text-gray-500">ICT Graduate | Tech Entrepreneur</div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-purple-100 text-purple-800 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Hosea</h2>
                        </div>
                        <p class="text-gray-600 mb-4">First woman to lead a technical team at a manufacturing firm in
                            Finland. Her leadership and technical expertise have led to increased productivity and
                            innovation.</p>
                        <div class="text-sm text-gray-500">Technical Engineering Graduate | Team Leader</div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 max-w-2xl mx-auto">
                    These success stories demonstrate HAITRAC's commitment to providing practical, industry-aligned
                    education that empowers students to excel in their chosen fields and make meaningful contributions to
                    society.
                </p>
            </div>
        </div>
    </div>
@endsection
