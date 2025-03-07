@extends('layouts.web')
@section('title')
    FAQs
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class=" mx-auto">
                <h1 class="text-4xl font-bold text-blue-900 mb-12 text-center">
                    Frequently Asked Questions
                </h1>

                <div class="space-y-6">
                    @php
                        $faqs = [
                            [
                                'question' => 'What programs does STUDYINFO offer?',
                                'answer' =>
                                    'STUDYINFO offers programs in Nursing, ICT, Mechanical Engineering, and various short courses designed to meet industry needs.',
                            ],
                            [
                                'question' => 'Are your programs accredited?',
                                'answer' =>
                                    'Yes, all our programs are fully accredited by relevant education and professional bodies, ensuring high-quality education that meets international standards.',
                            ],
                            [
                                'question' => 'How long are the typical programs?',
                                'answer' =>
                                    'Program duration varies. Nursing and Engineering programs typically range from 2-4 years, while short courses can be 3-6 months.',
                            ],
                        ];
                    @endphp

                    @foreach ($faqs as $faq)
                        <div x-data="{ open: false }" class="bg-white shadow-md rounded-lg">
                            <button @click="open = !open"
                                class="w-full text-left p-6 flex justify-between items-center hover:bg-blue-50 transition-colors">
                                <span class="text-xl font-semibold text-blue-800">{{ $faq['question'] }}</span>
                                <svg x-show="!open" class="w-6 h-6 text-secondary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <svg x-show="open" class="w-6 h-6 text-secondary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition class="p-6 bg-blue-50 text-gray-700">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
