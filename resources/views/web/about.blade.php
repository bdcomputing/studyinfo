@extends('layouts.web')
@section('title')
About
@endsection
@section('content')
<div class="bg-white min-h-screen">
    <div class="container mx-auto px-4 py-24">
        <div class="w-full">

            <div class=" p-10 space-y-12 w-full mx-auto">
                <section>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('assets/images/about.jpg') }}" alt="STUDYINFO"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-primary-800 mb-6">Who we are</h2>
                            <p class="text-gray-700 leading-relaxed text-lg">
                                At StudyInfo, we believe that education knows no borders.
                                We are a passionate team dedicated to helping students achieve
                                their dreams of studying abroad by providing expert guidance,
                                personalized support, and access to top universities worldwide.
                        </div>
                    </div>
                </section>
                <section>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="flex justify-center items-center md:order-last">
                            <img src="{{ asset('assets/images/about.jpg') }}" alt="STUDYINFO"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-primary-800 mb-6">Our Mission</h2>
                            <p class="text-gray-700 leading-relaxed text-lg">
                                Our mission is to simplify the study abroad journey by offering
                                comprehensive assistance from choosing the right university and
                                course to visa applications and accommodation arrangements.
                                We aim to make international education accessible, stress-free, and rewarding.
                        </div>
                    </div>
                </section>

                <section class="py-20">
                    <h2 class="text-2xl text-center justify-center font-bold text-primary-800 mb-6">Why Choose STUDYINFO?
                    </h2>
                    <div class="grid md:grid-cols-4 gap-8 pt-10">
                        <div class="border border-primary-100 p-5 space-y-2 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                            <i class="bi bi-mortarboard-fill text-primary text-7xl"></i>
                            <p class="font-bold text-md text-primary pt-4">
                                Expert Guidance
                            </p>
                            <p class="text-left text-gray-600">Our team consists of experienced education consultants who understand the complexities of studying abroad.</p>
                        </div>

                        <div class="border border-primary-100 p-5 space-y-2 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                            <i class="bi bi-building text-primary text-7xl"></i>
                            <p class="font-bold text-md text-primary pt-4">
                                Top University Partnerships

                            </p>
                            <p class="text-left text-gray-600">We collaborate with globally recognized universities, ensuring students get the best opportunities.</p>
                        </div>

                        <div class="border border-primary-100 p-5 space-y-2 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                            <i class="bi bi-person-gear text-primary text-7xl"></i>
                            <p class="font-bold text-md text-primary pt-4">
                                Personalized Support
                            </p>
                            <p class="text-left text-gray-600">From application processes to pre-departure preparation, we offer tailored services.</p>
                        </div>

                        <div class="border border-primary-100 p-5 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                            <i class="bi bi-person-gear text-primary  text-7xl"></i>
                            <p class="font-bold text-md text-primary pt-4">
                                Visa & Scholarship Assistance
                            </p>
                            <p class="text-left text-gray-600">We help students secure visas and explore financial aid options to make studying abroad affordable.</p>
                        </div>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-primary-800 mb-6">Mission & Vision</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-primary-50 p-8 rounded-xl hover:shadow-lg border border-primary-100   transition-all duration-300">
                            <h3 class="font-bold text-2xl text-secondary mb-4">Our Mission</h3>
                            <p class="text-gray-700 text-lg">
                                To be a leading center of excellence in education, recognized for producing globally
                                competent and socially responsible professionals who shape the future of healthcare,
                                technology, and technical fields.
                            </p>
                        </div>
                        <div class="bg-primary-50 p-8 rounded-xl hover:shadow-lg border border-primary-100  transition-all duration-300">
                            <h3 class="font-bold text-2xl text-secondary mb-4">Our Vision</h3>
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
                            class="bg-gray-50 p-6 rounded-xl text-center hover:shadow-lg hover:bg-white  transition-all duration-300 border border-gray-100">
                            <i class="bi {{ $value[1] }} text-primary text-7xl pt-5"></i>
                            <h3 class="font-bold text-xl text-secondary pt-5">{{ $value[0] }}</h3>
                        </div>
                        @endforeach
                    </div>
                </section>

                <section>
                    <div class="mt-12 bg-white shadow-lg rounded-lg p-8">
                        <h2 class="text-2xl font-semibold text-primary-500 mb-6">Our Faculty Commitment</h2>
                        <p class="text-gray-600 leading-relaxed">
                            At STUDYINFO, our faculty comprises professionals with diverse backgrounds in Nursing, ICT,
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