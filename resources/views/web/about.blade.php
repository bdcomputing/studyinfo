@extends('layouts.web')
@section('title')
    About
@endsection
@section('content')
    <div class="bg-white min-h-screen">
        <div class="container mx-auto px-4 py-10">
            <div class="w-full">
                <div class="py-5 lg:px-5">
                    <p class="text-xl md:text-2xl font-bold text-primary">
                        About StudyInfo
                    </p>
                </div>

                <div class=" md:py-10 space-y-12 w-full mx-auto">
                    <section>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('assets/images/about.jpg') }}" alt="STUDYINFO"
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-primary mb-6">Who we are</h2>
                                <p class=" leading-relaxed ">
                                    At StudyInfo, we believe that education knows no borders.
                                    We are a passionate team dedicated to helping students achieve
                                    their dreams of studying abroad by providing expert guidance,
                                    personalized support, and access to top universities worldwide.
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="bg-gradient-to-b from-secondary-400 to-secondary p-5 rounded-xl text-white">
                                <h2 class="text-2xl font-bold  mb-6">Our Vision</h2>
                                <p class=" leading-relaxed ">
                                    Our vision is to simplify the study abroad journey by offering
                                    comprehensive assistance from choosing the right university and
                                    course to visa applications and accommodation arrangements.
                                    We aim to make international education accessible, stress-free, and rewarding.
                            </div>
                            <div class="bg-gradient-to-b from-secondary-400 to-secondary p-5 rounded-xl text-white">
                                <h2 class="text-2xl font-bold  mb-6">Our Mission</h2>
                                <p class=" leading-relaxed  ">
                                    Our mission is to simplify the study abroad journey by offering
                                    comprehensive assistance from choosing the right university and
                                    course to visa applications and accommodation arrangements.
                                    We aim to make international education accessible, stress-free, and rewarding.
                            </div>
                        </div>
                    </section>

                    <section class="py-20">
                        <h2 class="text-2xl text-center justify-center font-bold text-primary mb-6">Why Choose STUDYINFO?
                        </h2>
                        <div class="grid md:grid-cols-4 gap-8 pt-10">
                            <div
                                class="border border-primary-100 p-5 space-y-2 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                                <i
                                    class="bi bi-mortarboard-fill bg-gradient-to-r from-secondary to-secondary-400 bg-clip-text text-transparent text-7xl"></i>
                                <p class="font-bold text-md text-primary pt-4">
                                    Expert Guidance
                                </p>
                                <p class=" text-gray-600">Our team consists of experienced education consultants
                                    who understand the complexities of studying abroad.</p>
                            </div>

                            <div
                                class="border border-primary-100 p-5 space-y-2 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                                <i
                                    class="bi bi-building text-primary text-7xl bg-gradient-to-r from-secondary to-secondary-400 bg-clip-text text-transparent"></i>
                                <p class="font-bold text-md text-primary pt-4">
                                    Top University Partnerships

                                </p>
                                <p class=" text-gray-600">We collaborate with globally recognized universities,
                                    ensuring students get the best opportunities.</p>
                            </div>

                            <div
                                class="border border-primary-100 p-5 space-y-2 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                                <i
                                    class="bi bi-person-gear text-primary text-7xl bg-gradient-to-r from-secondary to-secondary-400 bg-clip-text text-transparent"></i>
                                <p class="font-bold text-md text-primary pt-4">
                                    Personalized Support
                                </p>
                                <p class=" text-gray-600">From application processes to pre-departure preparation,
                                    we offer tailored services.</p>
                            </div>

                            <div
                                class="border border-primary-100 p-5 rounded-md hover:shadow-md transition-all duration-300 justify-center items-center text-center">
                                <i
                                    class="bi bi-newspaper text-primary  text-7xl bg-gradient-to-r from-secondary to-secondary-400 bg-clip-text text-transparent"></i>
                                <p class="font-bold text-lg text-primary pt-4">
                                    Visa & Scholarship Assistance
                                </p>
                                <p class=" text-gray-600">We help students secure visas and explore financial aid
                                    options to make studying abroad affordable.</p>
                            </div>
                        </div>
                    </section>



                </div>
            </div>
        </div>
    </div>
@endsection
