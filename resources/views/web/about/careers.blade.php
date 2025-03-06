@extends('layouts.web')
@section('title')
    Careers
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <div class=" mx-auto">
                <div class="mb-5">
                    <h1 class="text-4xl font-bold text-primary-800 text-left">Career Opportunities at HAITRAC</h1>
                    <p class="text-lg text-gray-600">Join our dynamic team and contribute to the future of higher education.
                    </p>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Work with Us</h2>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary-500 mr-3 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                            <span>Innovative and dynamic work environment</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary-500 mr-3 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                                </path>
                            </svg>
                            <span>Professional development opportunities</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary-500 mr-3 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Commitment to excellence and innovation</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Current Openings</h2>
                    <div class="space-y-6">
                        <div class="border-b pb-4">
                            <h3 class="text-xl font-medium text-gray-700">Nursing Lecturer</h3>
                            <p class="text-gray-600 mb-2">Full-time | Eldoret Campus</p>
                            <a href="#"
                                class="inline-block bg-primary-600 text-white px-4 py-2 rounded hover:bg-primary-700 transition duration-300">Apply
                                Now</a>
                        </div>
                        <div class="border-b pb-4">
                            <h3 class="text-xl font-medium text-gray-700">ICT Research Coordinator</h3>
                            <p class="text-gray-600 mb-2">Full-time | Technological Innovation Center</p>
                            <a href="#"
                                class="inline-block bg-primary-600 text-white px-4 py-2 rounded hover:bg-primary-700 transition duration-300">Apply
                                Now</a>
                        </div>
                        <div class="pb-4">
                            <h3 class="text-xl font-medium text-gray-700">Technical Training Specialist</h3>
                            <p class="text-gray-600 mb-2">Part-time | Community Outreach Program</p>
                            <a href="#"
                                class="inline-block bg-primary-600 text-white px-4 py-2 rounded hover:bg-primary-700 transition duration-300">Apply
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
