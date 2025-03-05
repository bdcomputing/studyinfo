@extends('layouts.web')
@section('title')
    Homepage
@endsection
@section('content')
    <main class="font-poppins bg-gray-100 text-gray-800">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-primary to-blue-800 text-white py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Shaping Tomorrow's
                            Leaders Today</h1>
                        <p class="text-lg mb-8 opacity-90">At HAITRAC, we empower students through quality education in
                            Nursing, ICT, and Technical disciplines. Join us to develop practical skills for a successful
                            career.</p>
                        <div class="flex flex-wrap gap-4">
                            <button
                                class="bg-primary hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300">Explore
                                Programs</button>
                            <button
                                class="bg-transparent hover:bg-white hover:text-primary text-white font-medium py-3 px-6 rounded-lg border-2 border-white transition duration-300">Learn
                                More</button>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center">
                        <img src="{{ asset('/assets/images/grad.jpg') }}" alt="HAITRAC Students"
                            class="max-w-full animate-pulse">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose HAITRAC?</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">We provide a unique learning experience focused on
                        practical skills and industry demands</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 text-center transition duration-300 hover:shadow-lg hover:-translate-y-2">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-graduation-cap text-3xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Expert Faculty</h3>
                        <p class="text-gray-600">Learn from industry professionals with extensive experience and expertise
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 text-center transition duration-300 hover:shadow-lg hover:-translate-y-2">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-laptop-code text-3xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Hands-on Training</h3>
                        <p class="text-gray-600">Gain practical experience through our state-of-the-art facilities and labs
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 text-center transition duration-300 hover:shadow-lg hover:-translate-y-2">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-briefcase text-3xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Industry Connections</h3>
                        <p class="text-gray-600">Benefit from our strong relationships with leading employers</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <img src="{{ asset('/assets/images/about.jpg') }}" alt="HAITRAC Campus"
                            class="rounded-xl shadow-lg w-full">
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">About HAITRAC</h2>
                        <p class="text-gray-600 mb-6">Established with a vision to empower students through quality
                            education, HAITRAC offers programs in Nursing, ICT, and various technical disciplines. Our
                            mission is to bridge the skills gap in today's workforce by providing innovative, practical, and
                            industry-aligned training.</p>
                        <p class="text-gray-600 mb-6">At HAITRAC, our teaching approach combines theoretical instruction
                            with practical experience. Our state-of-the-art facilities and experienced faculty ensure
                            students gain hands-on expertise to excel in their careers.</p>

                        <h3 class="text-xl font-bold mb-4">Our Core Values</h3>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-success mr-3"></i>
                                <span>Excellence in Education</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-success mr-3"></i>
                                <span>Innovation & Creativity</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-success mr-3"></i>
                                <span>Practical Learning</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-success mr-3"></i>
                                <span>Industry Relevance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CEO's Message -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col-reverse md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">CEO's Message</h2>
                        <p class="text-gray-600 mb-6 italic">"At HAITRAC, we are committed to equipping students with the
                            skills and knowledge needed to thrive in today's fast-evolving world. Our focus on practical,
                            hands-on training ensures our graduates are job-ready and capable of making a meaningful impact
                            in their respective fields."</p>
                        <h4 class="text-xl font-semibold text-primary">CEO, HAITRAC</h4>
                    </div>
                    <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
                        <img src="{{ asset('/assets/leadership/a1.png') }}" alt="HAITRAC CEO"
                            class="rounded-3xl shadow-lg w-full max-w-md">
                    </div>
                </div>
            </div>
        </section>

        <!-- Programs Section -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Programs</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our comprehensive range of courses designed
                        to prepare you for successful careers</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Program 1 -->
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('/assets/images/nursing.jpg') }}" alt="Nursing Program"
                                class="w-full h-full object-cover transition duration-300 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Nursing</h3>
                            <p class="text-gray-600 mb-6">Comprehensive training in medical care, patient management, and
                                healthcare practices.</p>
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                <div class="flex items-center text-gray-500">
                                    <i class="far fa-clock mr-2 text-primary"></i>
                                    <span>3 Years</span>
                                </div>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg transition duration-300">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Program 2 -->
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('/assets/images/ict-program.jpg') }}" alt="ICT Program"
                                class="w-full h-full object-cover transition duration-300 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Information & Communication Technology</h3>
                            <p class="text-gray-600 mb-6">Modern IT skills including programming, networking, and systems
                                administration.</p>
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                <div class="flex items-center text-gray-500">
                                    <i class="far fa-clock mr-2 text-primary"></i>
                                    <span>2 Years</span>
                                </div>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg transition duration-300">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Program 3 -->
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('/assets/images/technical-program.jpg') }}" alt="Technical Program"
                                class="w-full h-full object-cover transition duration-300 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Technical Disciplines</h3>
                            <p class="text-gray-600 mb-6">Specialized training in various technical fields like engineering
                                and automation.</p>
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                <div class="flex items-center text-gray-500">
                                    <i class="far fa-clock mr-2 text-primary"></i>
                                    <span>2-3 Years</span>
                                </div>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg transition duration-300">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision & Mission -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-secondary-400 mb-4">Our Vision & Mission</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Guiding principles that shape our approach to
                        education</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Vision -->
                    <div class="bg-gray-50 rounded-xl p-8 text-center transition duration-300 hover:shadow-lg">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-eye text-3xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Vision</h3>
                        <p class="text-gray-600">To be a leading center of excellence in education, recognized for
                            producing globally competent and socially responsible professionals who shape the future of
                            healthcare, technology, and technical fields.</p>
                    </div>

                    <!-- Mission -->
                    <div class="bg-gray-50 rounded-xl p-8 text-center transition duration-300 hover:shadow-lg">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-bullseye text-3xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Mission</h3>
                        <p class="text-gray-600">To empower individuals with knowledge, skills, and practical experience
                            through innovative education in Nursing, ICT, and technical disciplines, fostering a generation
                            of professionals who drive change and make a positive impact in their communities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        {{-- @include('web.about.team') --}}

        <!-- Recognition Section -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Recognition for Excellence</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">HAITRAC has been recognized as a leading institution
                        in Nursing, ICT, and technical courses, earning accolades from local education boards and industry
                        organizations.</p>
                </div>

                <div class="flex flex-wrap justify-center gap-8">
                    <!-- Award 1 -->
                    <div class="bg-gray-50 rounded-xl p-8 text-center w-48 transition duration-300 hover:scale-105">
                        <div class="text-4xl text-secondary mb-4">
                            <i class="fas fa-award"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Excellence in Education</p>
                    </div>

                    <!-- Award 2 -->
                    <div class="bg-gray-50 rounded-xl p-8 text-center w-48 transition duration-300 hover:scale-105">
                        <div class="text-4xl text-secondary mb-4">
                            <i class="fas fa-medal"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Top Nursing Program</p>
                    </div>

                    <!-- Award 3 -->
                    <div class="bg-gray-50 rounded-xl p-8 text-center w-48 transition duration-300 hover:scale-105">
                        <div class="text-4xl text-secondary mb-4">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <p class="font-semibold text-gray-800">Innovation in Teaching</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-20 bg-gradient-to-r from-primary to-blue-800 text-white text-center">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-6">Begin Your Journey Today</h2>
                <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">Take the first step towards a rewarding career with
                    HAITRAC's industry-focused programs</p>
                <button
                    class="bg-white hover:bg-gray-100 text-primary font-medium py-3 px-8 rounded-lg transition duration-300 text-lg">Apply
                    Now</button>
            </div>
        </section>

        <script>
            // Smooth scrolling for anchor links
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();

                        const targetId = this.getAttribute('href');
                        const target = document.querySelector(targetId);

                        if (target) {
                            window.scrollTo({
                                top: target.offsetTop,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            });
        </script>
    </main>
@endsection()
