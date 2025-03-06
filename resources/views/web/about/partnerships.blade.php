@extends('layouts.web')
@section('title')
    Partnerships
@endsection
@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-primary-800 mb-10 text-center">Our Strategic Partnerships</h1>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Healthcare Partnerships</h2>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-primary-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Leading Hospitals in Kenya and Europe
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-primary-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Internship and Mentorship Programs
                        </li>
                    </ul>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Technology Collaborations</h2>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-primary-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Top IT Companies and Tech Startups
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-primary-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Technology Innovation Networks
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 bg-white shadow-lg rounded-lg p-8 text-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Partnership Benefits</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Our strategic partnerships provide students with unique opportunities for internships, mentorship, and
                    direct pathways to employment. By collaborating with leading organizations, we ensure our curriculum
                    remains industry-aligned and our graduates are job-ready.
                </p>
            </div>
        </div>
    </div>
@endsection
