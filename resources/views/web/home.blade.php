@extends('layouts.web')
@section('title')
    Homepage
@endsection
@section('content')
    <main class="font-poppins bg-gray-100 text-gray-800">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-primary to-blue-800 text-white py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Shaping Tomorrow's
                            Leaders Today</h1>
                        <p class="text-lg mb-8 opacity-90">At HAITRAC, we empower students through quality education in
                            Nursing, ICT, and Technical disciplines. Join us to develop practical skills for a successful
                            career.</p>
                        <div class="flex flex-wrap gap-5">
                            <button onclick="window.location.href='{{ route('web.programs.all') }}'"
                                class="bg-primary hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300">Explore
                                Programs</button>
                            <button onclick="window.location.href='{{ route('web.about') }}'"
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


        <div class="bg-white py-20 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-6">
                        Why Choose HAITRAC?
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">We provide a unique learning experience focused on
                        practical skills and industry demands</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    {{-- Credential Section --}}
                    <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                        <div class="flex items-center mb-4">
                            <svg class="w-12 h-12 text-blue-600 mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-1.horizo ntal 0 5v-4.102l1.69-.725a1 1 0 000-1.838l-7-3-7 3a1 1 0 000 1.838l7 3z" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-900">Industry-Recognized Credentials</h3>
                        </div>
                        <p class="text-gray-600">
                            Transform your future with our fully accredited programs. We don't just teach—we prepare you for
                            success. Our courses are rigorously validated by leading professional bodies, ensuring your
                            qualifications carry weight both locally and internationally.
                        </p>
                    </div>

                    {{-- Industry Connections Section --}}
                    <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                        <div class="flex items-center mb-4">
                            <svg class="w-12 h-12 text-green-600 mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.24-.445.47-.89.683-1.335C14.327 14.028 15.635 13 17 13c1.364 0 2.673 1.028 3.387 2.665.216.445.44.89.684 1.335H12.93zM5.5 13c1.472 0 2.779.8 3.636 2.012a9.608 9.608 0 01.728 1.988H1.136a7.608 7.608 0 01.728-1.988A4.468 4.468 0 015.5 13z" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-900">Unparalleled Industry Connections</h3>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Your career starts here. We've forged strategic partnerships with top-tier hospitals,
                            cutting-edge IT companies, and innovative technical firms.
                        </p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>Direct internship opportunities</li>
                            <li>Mentorship from industry experts</li>
                            <li>A seamless pathway to professional employment</li>
                        </ul>
                    </div>

                    {{-- Community Impact Section --}}
                    <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                        <div class="flex items-center mb-4">
                            <svg class="w-12 h-12 text-purple-600 mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.152 24.152 0 0110 15c-2.95 0-5.662-.826-8-2.308z" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-900">Beyond Skills: Making a Difference</h3>
                        </div>
                        <p class="text-gray-600">
                            Education is more than learning—it's about creating impact. At HAITRAC, we're committed to
                            community empowerment. Our student-led projects and outreach programs go beyond technical
                            training, cultivating socially responsible professionals who are ready to drive meaningful
                            change.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <img src="{{ asset('/assets/images/about.jpg') }}" alt="HAITRAC Campus"
                            class="rounded-xl shadow-lg w-full">
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">About HAITRAC</h2>
                        <p class="text-gray-600 mb-6">Established with a vision to empower students through quality
                            education, HAITRAC offers programs in Nursing, ICT, and various technical disciplines. Our
                            mission is to bridge the skills gap in today's workforce by providing innovative, practical, and
                            industry-aligned training.</p>
                        <p class="text-gray-600 mb-6">At HAITRAC, our teaching approach combines theoretical instruction
                            with practical experience. Our state-of-the-art facilities and experienced faculty ensure
                            students gain hands-on expertise to excel in their careers.</p>

                        <h3 class="text-xl font-bold mb-4">Our Core Values</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 rounded-full bg-primary-400 flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Excellence in Education</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 rounded-full bg-primary-400 flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Innovation & Creativity</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 rounded-full bg-primary-400 flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Practical Learning</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Industry Relevance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CEO's Message -->
        <section class="py-20 bg-white">
            <div class="container mx-auto">
                <div class="flex flex-col-reverse md:flex-row items-center gap-12">
                    <div class="md:w-1/2 px-24">
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">CEO's Message</h2>
                        <p class="text-gray-600 mb-6 italic">"At HAITRAC, we are committed to equipping students with the
                            skills and knowledge needed to thrive in today's fast-evolving world. Our focus on practical,
                            hands-on training ensures our graduates are job-ready and capable of making a meaningful impact
                            in their respective fields."</p>
                        <h4 class="text-xl font-semibold text-primary">CEO, HAITRAC</h4>
                    </div>
                    <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
                        <img src="{{ asset('/assets/leadership/a1.png') }}" alt="HAITRAC CEO"
                            class=" shadow-lg w-full max-w-md">
                    </div>
                </div>
            </div>
        </section>

        <!-- Programs Section -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Programs</h2>
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
                <div class="text-center md:text-left items-start">
                    <h2 class="text-4xl font-bold text-secondary-950">Our <span class="text-primary-600">Mission</span>
                    </h2>
                    <p class="text-lg text-secondary-600 max-w-5xl">To be a leading center of excellence in
                        education,
                        recognized for producing globally competent and socially responsible professionals who shape the
                        future of healthcare, technology, and technical fields.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-10">
                    <!-- Mission -->
                    <div
                        class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 hover:shadow-lg border border-secondary-100">

                        <h3 class="text-xl font-bold text-gray-800 mb-4">Our Commitment</h3>
                        <p class="text-gray-600">At HAITRAC, we are deeply committed to transforming education by providing
                            practical, industry-aligned training that equips students with the skills and knowledge needed
                            to excel in healthcare, technology, and technical fields.</p>
                    </div>

                    <!-- Vision -->
                    <div
                        class="bg-white rounded-2xl p-5 md:p-10 transition duration-300 hover:shadow-lg border border-secondary-100">

                        <h3 class="text-xl font-bold text-gray-800 mb-4">The Impact</h3>
                        <p class="text-gray-600">Through strategic partnerships, community initiatives, and hands-on
                            training, HAITRAC creates meaningful opportunities for students to develop career-critical
                            skills and make significant contributions to society.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 pt-5">
                    <!-- Vision -->
                    <div
                        class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 hover:shadow-lg border border-secondary-100">

                        <h3 class="text-xl font-bold text-gray-800 mb-4">The Importance</h3>
                        <p class="text-gray-600">HAITRAC recognizes education as a powerful tool for individual and
                            community transformation, focusing on developing professionals who can address real-world
                            challenges with expertise and social responsibility.</p>
                    </div>
                    <!-- Vision -->
                    <div
                        class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 hover:shadow-lg border border-secondary-100">

                        <h3 class="text-xl font-bold text-gray-800 mb-4">Our Resolve</h3>
                        <p class="text-gray-600">We are dedicated to bridging the skills gap by delivering innovative,
                            practical, and transformative education that empowers students to become leaders,
                            problem-solvers, and change-makers in their respective industries.</p>
                    </div>
                    <!-- Vision -->
                    <div
                        class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 hover:shadow-lg border border-secondary-100">

                        <h3 class="text-xl font-bold text-gray-800 mb-4">Our Vision</h3>
                        <p class="text-gray-600"> To empower individuals with knowledge, skills, and practical experience
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
                <div class="text-left mb-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Recognition for Excellence</h2>
                    <p class="text-md text-gray-600 max-w-4xl">HAITRAC has been recognized as a leading institution
                        in Nursing, ICT, and technical courses, earning accolades from local education boards and industry
                        organizations.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Success Story 1: Nursing -->
                    <div
                        class="bg-white rounded-xl p-8 text-center transition duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="text-4xl text-blue-600 mb-4">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-5 text-2xl">Nursing Excellence</h3>
                        <p class="text-md text-gray-600">Valerie Cherunya graduated and secured a position at a leading
                            European hospital, winning the "Rising Star in Healthcare" award.</p>
                    </div>

                    <!-- Success Story 2: ICT -->
                    <div
                        class="bg-white rounded-xl p-8 text-center transition duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="text-4xl text-green-600 mb-4">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-5 text-2xl">ICT Innovation</h3>
                        <p class="text-md text-gray-600">Edwin developed a mobile app simplifying government services,
                            gaining national recognition at the Kenya Tech Summit.</p>
                    </div>

                    <!-- Success Story 3: Technical Fields -->
                    <div
                        class="bg-white rounded-xl p-8 text-center transition duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="text-4xl text-purple-600 mb-4">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-5 text-2xl">Technical Leadership</h3>
                        <p class="text-md text-gray-600">Hosea became the first woman to lead a technical team at a
                            manufacturing firm in Finland, driving innovation.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-20 bg-gradient-to-r from-primary to-blue-800 text-white text-center">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-2">Your Journey Starts With Purpose.</h2>
                <h5 class="text-xl md:text-2xl text-primary-950 mb-6">
                    Your Future Starts With HAITRAC.
                </h5>
                <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">Take the first step towards a rewarding career with
                    HAITRAC's industry-focused programs</p>
                <button
                    class="bg-white hover:bg-gray-100 text-primary font-medium py-3 px-8 rounded-lg transition duration-300 text-lg">
                    Start Your Journey Today</button>
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
