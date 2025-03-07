@extends('layouts.web')
@section('title')
    About
@endsection
@section('content')
    <div class="bg-white min-h-screen">
        <div class="container mx-auto px-4 py-24">
            <div class="w-full">
                <div class="flex justify-center items-center ">
                    <h1
                        class="max-w-2xl text-3xl md:text-4xl font-extrabold text-secondary-700 mb-12 text-center justify-center leading-tight">
                        About HAITRAC: Empowering Futures Through Excellence in Education
                    </h1>
                </div>
                <div class=" p-10 space-y-12 w-full mx-auto">
                    <section>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('assets/images/about.jpg') }}" alt="HAITRAC"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-primary-800 mb-6">Our Story</h2>
                                <p class="text-gray-700 leading-relaxed text-lg">
                                    HAITRAC was established with a visionary mission to transform education by providing
                                    practical,
                                    industry-aligned training in Nursing, ICT, and technical disciplines. Our commitment
                                    lies in
                                    bridging the skills gap and empowering students to become globally competent
                                    professionals who
                                    can make meaningful contributions to their fields.
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="py-20">
                        <h2 class="text-2xl text-center justify-center font-bold text-primary-800 mb-6">Why Choose HAITRAC?
                        </h2>
                        <div class="grid md:grid-cols-4 gap-8 pt-10">
                            <div class="transition-all duration-300 justify-center items-center text-center">
                                <i class="bi bi-mortarboard-fill text-primary-700 text-7xl"></i>
                                <p class="font-bold text-md text-secondary-700 pt-4">Industry-Aligned Practical Training
                                    <br>
                                    Programs
                                </p>
                            </div>

                            <div class="transition-all duration-300 justify-center items-center text-center">
                                <i class="bi bi-people-fill text-primary-700 text-7xl"></i>
                                <p class="font-bold text-md text-secondary-700 pt-4">Expert Faculty With Industry <br>
                                    Experiece
                                </p>
                            </div>

                            <div class="transition-all duration-300 justify-center items-center text-center">
                                <i class="bi bi-building text-primary-700 text-7xl"></i>
                                <p class="font-bold text-md text-secondary-700 pt-4">State-of-the-Art Training Facilities
                                    <br>
                                    Available
                                </p>
                            </div>

                            <div class="transition-all duration-300 justify-center items-center text-center">
                                <i class="bi bi-briefcase-fill text-primary-700  text-7xl"></i>
                                <p class="font-bold text-md text-secondary-700 pt-4">Strong Industry Placement Support <br>
                                    Network
                                </p>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-primary-800 mb-6">Mission & Vision</h2>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="bg-primary-50 p-8 rounded-xl hover:shadow-lg transition-all duration-300">
                                <h3 class="font-bold text-2xl text-secondary-700 mb-4">Our Mission</h3>
                                <p class="text-gray-700 text-lg">
                                    To be a leading center of excellence in education, recognized for producing globally
                                    competent and socially responsible professionals who shape the future of healthcare,
                                    technology, and technical fields.
                                </p>
                            </div>
                            <div class="bg-primary-50 p-8 rounded-xl hover:shadow-lg transition-all duration-300">
                                <h3 class="font-bold text-2xl text-secondary-700 mb-4">Our Vision</h3>
                                <p class="text-gray-700 text-lg">
                                    To empower individuals with knowledge, skills, and practical experience through
                                    innovative education, fostering a generation of professionals who drive change and make
                                    a positive impact in their communities.
                                </p>
                            </div>
                        </div>
                    </section>



                    <section class="py-20">
                        <h2 class="text-2xl font-bold text-primary-800  justify-center text-center">Our Core Values</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 pt-10 gap-20">
                            @php
                                $values = [
                                    ['Excellence', 'bi-trophy-fill'],
                                    ['Innovation', 'bi-lightbulb-fill'],
                                    ['Integrity', 'bi-shield-check'],
                                    ['Inclusivity', 'bi-people-fill'],
                                ];
                            @endphp

                            @foreach ($values as $value)
                                <div
                                    class="bg-gray-50 p-6 rounded-xl text-center hover:shadow-lg hover:bg-white transition-all duration-300 border border-gray-100">
                                    <i class="bi {{ $value[1] }} text-primary-700 text-7xl pt-5"></i>
                                    <h3 class="font-bold text-xl text-secondary-700 pt-5">{{ $value[0] }}</h3>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <section>
                        <div class="mt-12 bg-white shadow-lg rounded-lg p-8">
                            <h2 class="text-2xl font-semibold text-primary-500 mb-6">Our Faculty Commitment</h2>
                            <p class="text-gray-600 leading-relaxed">
                                At HAITRAC, our faculty comprises professionals with diverse backgrounds in Nursing, ICT,
                                and technical
                                fields. They bring a wealth of industry experience, combining academic expertise with
                                practical
                                insights. Our instructors are committed to providing students with hands-on training,
                                mentorship, and
                                innovative teaching methods that prepare them for real-world challenges.
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
