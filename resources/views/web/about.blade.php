@extends('layouts.web')
@section('title')
    About
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-50 to-white min-h-screen">
        <div class="container mx-auto px-4 py-16">
            <div class="w-full">
                <div class="flex justify-center items-center ">
                    <h1 class="max-w-xl text-2xl md:text-3xl font-bold text-blue-900 mb-8 text-center">
                        About HAITRAC: Empowering Futures Through Excellence
                    </h1>
                </div>

                <div class="bg-white shadow-2xl rounded-xl p-8 space-y-6">
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Our Story</h2>
                        <p class="text-gray-700 leading-relaxed">
                            HAITRAC was established with a visionary mission to transform education by providing practical,
                            industry-aligned training in Nursing, ICT, and technical disciplines. We are committed to
                            bridging the skills gap and empowering students to become globally competent professionals.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Mission & Vision</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <h3 class="font-bold text-xl text-blue-800 mb-3">Mission</h3>
                                <p class="text-gray-700">
                                    To be a leading center of excellence in education, recognized for producing globally
                                    competent and socially responsible professionals who shape the future of healthcare,
                                    technology, and technical fields.
                                </p>
                            </div>
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <h3 class="font-bold text-xl text-blue-800 mb-3">Vision</h3>
                                <p class="text-gray-700">
                                    To empower individuals with knowledge, skills, and practical experience through
                                    innovative education, fostering a generation of professionals who drive change and make
                                    a positive impact in their communities.
                                </p>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Core Values</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
                            @php
                                $values = [
                                    ['Excellence', 'Striving for the highest standards in education and training'],
                                    ['Innovation', 'Embracing modern techniques and technologies to enhance learning'],
                                    ['Integrity', 'Upholding honesty, ethics, and accountability'],
                                    ['Inclusivity', 'Fostering a diverse and supportive environment'],
                                ];
                            @endphp

                            @foreach ($values as $value)
                                <div class="bg-gray-100 p-4 rounded-lg text-center hover:shadow-md transition-all">
                                    <h3 class="font-bold text-blue-800 mb-2">{{ $value[0] }}</h3>
                                    <p class="text-sm text-gray-600">{{ $value[1] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
