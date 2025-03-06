@extends('layouts.web')
@section('title')
    Admissions
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-4xl md:text-3xl font-bold text-primary-500 mb-12 text-center">
                    Your Journey Starts Here: Admissions at HAITRAC
                </h1>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white shadow-2xl rounded-xl p-8">
                        <h2 class="text-2xl font-semibold text-primary-600 mb-6">Admission Requirements</h2>
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                High School Diploma or Equivalent
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                English Proficiency
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Program-Specific Prerequisites
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white shadow-2xl rounded-xl p-8">
                        <h2 class="text-2xl font-semibold text-blue-700 mb-6">Application Process</h2>
                        <ol class="border-l-4 border-blue-500 space-y-4 pl-4">
                            <li class="pb-4 border-b">
                                <div class="font-semibold text-blue-800">1. Online Application</div>
                                <p class="text-gray-600 text-sm">Complete our online application form</p>
                            </li>
                            <li class="pb-4 border-b">
                                <div class="font-semibold text-blue-800">2. Document Submission</div>
                                <p class="text-gray-600 text-sm">Upload required academic documents</p>
                            </li>
                            <li class="pb-4 border-b">
                                <div class="font-semibold text-blue-800">3. Interview & Assessment</div>
                                <p class="text-gray-600 text-sm">Personal interview and skill assessment</p>
                            </li>
                            <li>
                                <div class="font-semibold text-blue-800">4. Acceptance & Enrollment</div>
                                <p class="text-gray-600 text-sm">Receive offer and complete enrollment</p>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('web.apply') }}"
                        class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-colors text-lg font-semibold">
                        Start Your Application
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
