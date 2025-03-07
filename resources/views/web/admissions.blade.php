@extends('layouts.web')
@section('title')
    Admissions
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-primary-500 mb-12 text-center">
                    Your Journey Starts Here: Admissions at STUDYINFO
                </h1>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white shadow-2xl rounded-xl p-8 hover:shadow-3xl transition-shadow duration-300">
                        <h2 class="text-2xl font-semibold text-primary-600 mb-6">Admission Requirements</h2>
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex items-center group hover:text-primary-600 transition-colors">
                                <svg class="w-6 h-6 text-green-500 mr-3 group-hover:scale-110 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                High School Diploma or Equivalent
                            </li>
                            <li class="flex items-center group hover:text-primary-600 transition-colors">
                                <svg class="w-6 h-6 text-green-500 mr-3 group-hover:scale-110 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                English Proficiency
                            </li>
                            <li class="flex items-center group hover:text-primary-600 transition-colors">
                                <svg class="w-6 h-6 text-green-500 mr-3 group-hover:scale-110 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Program-Specific Prerequisites
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white shadow-2xl rounded-xl p-8 hover:shadow-3xl transition-shadow duration-300">
                        <h2 class="text-2xl font-semibold text-secondary-700 mb-6">Application Process</h2>
                        <ol class="border-l-4 border-blue-500 space-y-4 pl-4">
                            <li class="pb-4 border-b hover:border-blue-300 transition-colors">
                                <div class="font-semibold text-blue-800">1. Online Application</div>
                                <p class="text-gray-600 text-sm">Complete our comprehensive online application form</p>
                            </li>
                            <li class="pb-4 border-b hover:border-blue-300 transition-colors">
                                <div class="font-semibold text-blue-800">2. Document Submission</div>
                                <p class="text-gray-600 text-sm">Upload all required academic documents and credentials</p>
                            </li>
                            <li class="pb-4 border-b hover:border-blue-300 transition-colors">
                                <div class="font-semibold text-blue-800">3. Interview & Assessment</div>
                                <p class="text-gray-600 text-sm">Participate in a personal interview and complete skill
                                    assessment</p>
                            </li>
                            <li class="hover:border-blue-300 transition-colors">
                                <div class="font-semibold text-blue-800">4. Acceptance & Enrollment</div>
                                <p class="text-gray-600 text-sm">Receive your acceptance offer and complete the enrollment
                                    process</p>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('web.apply') }}"
                        class="bg-secondary text-white px-8 py-3 rounded-full hover:bg-secondary-700 transform hover:scale-105 transition-all duration-300 text-lg font-semibold inline-flex items-center">
                        Start Your Application
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
