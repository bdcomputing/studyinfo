@extends('layouts.web')
@section('title')
Homepage
@endsection
@section('content')

<main class="min-h-screen  text-gray-800">



    <!-- Hero Section -->
    <section class=" bg-primary md:min-h-[74vh] md:h-full flex items-center md:pb-5 ">
        <div class="grid grid-cols-1  md:grid-cols-2 gap-8">
            <div class="text-primary-50 py-20 md:py-0 md:pl-20 pb-5 md:pb-0 px-5 md:px-0  flex flex-col justify-center">
                <h1 class="text-3xl md:text-5xl  mb-6 font-extrabold leading-loose">
                    Your Global Future Starts Here – Study Abroad with Confidence!</h1>
                <p class="text-lg mb-8 opacity-90 font-semibold">Find your dream university, apply for scholarships, and get visa assistance - <span class="text-secondary">all in one place.</span></p>
                <div class="flex flex-wrap gap-5">
                    <a href="#"
                        class="bg-secondary hover:bg-secondary-500 text-white font-medium py-3 px-6 rounded-full transition duration-300">Talk to Expert</a>
                    <a href="{{ route('web.about') }}"
                        class="bg-transparent hover:bg-secondary hover:text-primary text-white font-medium py-3 px-6 rounded-full border-2 border-secondary transition duration-300">
                        Programs</a>
                </div>
            </div>
            <div class="md:min-h-[67vh] !h-full p-3 ">
                <img src="{{ asset('/assets/images/cover.webp') }}" alt="STUDYINFO Students"
                    class="w-full h-full object-cover rounded-xl md:rounded-none md:rounded-bl-[50px]">
            </div>
        </div>
    </section>

    <div class="bg-white py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg/8 font-bold text-primary">
                Meet Our Esteemed Partners
            </h2>
            <div
                class="mx-auto mt-5 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('/assets/logos/Kalenjins-abroas-300x171.png') }}"
                    alt="Transistor" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('/assets/logos/Holmes-300x115.png') }}" alt="Reform"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('/assets/logos/SI-UK-300x157.png') }}" alt="Tuple"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="{{ asset('/assets/logos/uGGSPLogo-square.jpg') }}" alt="SavvyCal"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="{{ asset('/assets/logos/KNQA.jpeg') }}" alt="Statamic"
                    width="158" height="48">
            </div>
        </div>
    </div>
    <section class="py-10 p-5 bg-gray-50">
        <div class="grid container md:p-5 mx-auto grid-cols-1 md:grid-cols-2">
            <div class="">
                <div class="space-y-3">
                    <p class="text-primary font-bold md:text-2xl">We are StudyInfo</p>
                    <p class="text-sm md:text-base">We have been guiding students through every step from program choice to visa application, including scholarship to achieve their study abroad dreams.</p>
                </div>
                <div class=" md:p-5 py-5 grid grid-cols-2 gap-2 md:gap-5">
                    <div class=" flex gap-2 justify-around items-center  rounded-xl bg-white border border-accent-100 hover:shadow p-5 min-h-40">
                        <div class="flex">
                            <div class="space-y-2">
                                <p class="font-extrabold text-2xl md:text-3xl">10+</p>
                                <p class="text-sm md:text-base">Years of Experience</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>

                        </div>
                    </div>
                    <div class=" flex gap-2 justify-around items-center rounded-xl bg-white border border-accent-100 hover:shadow p-5">

                        <div class="flex items-center">
                            <div class="space-y-2">
                                <p class="font-extrabold text-2xl md:text-3xl">60+</p>
                                <p class="text-sm md:text-base">University Partners</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>

                        </div>
                    </div>
                    <div class=" flex gap-2 md:gap-5 items-center justify-around p-5 rounded-xl col-span-2 min-h-40 bg-white border border-accent-100 hover:shadow">

                        <div class="flex items-center">
                            <div class="space-y-2">
                                <p class="font-extrabold  text-2xl md:text-3xl">15000+</p>
                                <p class="text-sm md:text-base">Students Successfully Recruited</p>
                            </div>
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
            <div class="md:p-5 py-5 order-first md:order-last">
                <img class=" rounded-xl" src="https://img.freepik.com/free-photo/portrait-flight-attendant-with-plane-figurine_23-2150282826.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298" alt="">
            </div>
        </div>
    </section>
    <section class=" bg-white p-5">
        <div class="container mx-auto py-10">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-extrabold text-primary  mb-6">
                    Services for Students
                </h2>
            </div>


            <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-8">
                @php
                $services = [
                [
                'title' => 'Student Counselling',
                'description' => 'We provide comprehensive career counseling and university placement services, guiding students to select suitable academic paths and securing admissions to top-tier international institutions.',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                ',
                ],
                [
                'title' => 'Visa Counselling',
                'description' => 'We facilitate visa processing and passport application, ensuring a smooth and efficient experience by assisting with documentation, application submission, and providing guidance throughout the entire process.',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.893 13.393-1.135-1.135a2.252 2.252 0 0 1-.421-.585l-1.08-2.16a.414.414 0 0 0-.663-.107.827.827 0 0 1-.812.21l-1.273-.363a.89.89 0 0 0-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 0 1-1.81 1.025 1.055 1.055 0 0 1-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 0 1-1.383-2.46l.007-.042a2.25 2.25 0 0 1 .29-.787l.09-.15a2.25 2.25 0 0 1 2.37-1.048l1.178.236a1.125 1.125 0 0 0 1.302-.795l.208-.73a1.125 1.125 0 0 0-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 0 1-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 0 1-1.458-1.137l1.411-2.353a2.25 2.25 0 0 0 .286-.76m11.928 9.869A9 9 0 0 0 8.965 3.525m11.928 9.868A9 9 0 1 1 8.965 3.525" />
                </svg>
                '
                ],
                [
                'title' => 'IELTS Training & Embassy Prep',
                'description' => 'We offer tailored international standards IELTS training and embassy preparation services to equip students with the skills and confidence needed to excel in their language exams and secure successful university applications and visa interviews.',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                </svg>
                '
                ],


                ];
                @endphp


                {{-- Credential Section --}}
                @foreach ($services as $service)
                <div class="bg-white p-5  border border-accent-100 hover:shadow hover:border-secondary-200 rounded-xl max-w-sm">

                    <div class="md:p-5  w-full bg-white/90 space-y-3">
                        <p class="font-bold text-primary">{{$service['title']}}</p>
                        <div class="flex justify-center p-5">
                            {!!$service['svg']!!}
                        </div>
                        <p class="line-clamp-2 text-sm">{{$service['description']}}</p>
                        <div class="py-t">
                            <button class="p-3 py-1.5 rounded-md bg-primary text-sm text-white">View Details</button>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="bg-gray-50 p-5">
        <div class="container mx-auto md:p-5">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-extrabold text-primary  mb-6">
                    How we work
                </h2>
            </div>
            <div class=" grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 ">
                <div class="bg-white border border-gray-100 p-5 rounded-xl ">
                    <span class=" bg-secondary text-white  py-1 px-3 rounded-full">Step 1</span>
                    <div class="py-3 space-y-3">
                        <p class="font-bold text-base md:text-xl">Consult</p>
                        <p class="text-sm md:text-base">Connect with expert to assess your educational goals and visa requirements</p>
                    </div>

                </div>
                <div class="bg-white border border-gray-100 p-5 rounded-xl">
                    <span class=" bg-secondary text-white  py-1 px-3 rounded-full">Step 2</span>
                    <div class="py-3 space-y-3">
                        <p class="font-bold text-base md:text-xl">Apply</p>
                        <p class="text-sm md:text-base">We guide you in selecting the right program, university and provide support for your visa application.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-100 p-5 rounded-xl">
                    <span class=" bg-secondary text-white  py-1 px-3 rounded-full">Step 3</span>
                    <div class="py-3">
                        <p class="font-bold text-base md:text-xl">Fly</p>
                        <p class="text-sm md:text-base">Once you are approved you can start your juorney to your dream destination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-20 px-4 sm:px-6 lg:px-8">

        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-extrabold text-primary mb-6">
                    Choose Your Study Destination
                </h2>
                <p class="md:text-lg text-gray-600 max-w-2xl mx-auto font-bold">
                    Featured Destinations
                </p>
            </div>


            <div class="grid md:grid-cols-2 lg:grid-cols-4  gap-8">
                @php
                $destinations = [
                [
                'destination' => 'UK',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/group-five-african-american-woman-walking-together-parking-with-great-britain-flag_627829-503.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298',
                ],
                [
                'destination' => 'USA',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/group-five-african-american-woman-walking-together-parking-with-usa-flag_627829-531.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'Australia',
                'description' => 'https://img.freepik.com/free-photo/woman-signing-papers-street_23-2147657212.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298',
                'image' => 'https://img.freepik.com/free-photo/woman-signing-papers-street_23-2147657212.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'New Zealand',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/teenage-girl-holding-book-hand-looking-his-boyfriend-showing-something-near-lake_23-2148093543.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'Germany',
                'description' => '',
                'image' => ' https://img.freepik.com/free-photo/beautiful-redhead-woman-red-hat-sits-with-backpack-thermos-using-digital-tablet-outdoors-conn_1258-151886.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'Canada',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/portrait-male-student-with-books_23-2148882433.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                ];
                @endphp


                {{-- Credential Section --}}
                @foreach ($destinations as $destination)
                <div class="bg-white group relative border border-accent-100  hover:shadow-lg rounded-xl max-w-sm">
                    <div class="overflow-hidden rounded-xl">
                        <img src="{{$destination['image']}}" class="transition-transform duration-500 group-hover:scale-105 overflow-hidden rounded-t-xl max-h-30 overflow-y-hidden object-cover  w-full" alt="">
                    </div>
                    <div class="p-5 bottom-0 absolute z-50 w-full bg-white/90">
                        <p class="font-bold text-primary">Study in {{$destination['destination']}}</p>
                        <button class="p-1  md:text-sm py-2 bg-secondy hover:underline  text-secondary">Read More</button>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="bg-gray-50  lg:py-12 lg:flex lg:justify-center">
        <div
            class="overflow-hidden bg-white  border border-gray-100 lg:flex container mx-auto lg:shadow-md lg:rounded-xl">
            <div class="lg:w-1/2">
                <div class="h-64 bg-cover lg:h-full" style="background-image:url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')"></div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-2xl font-semibold text-primary  md:text-3xl">
                    Start your Journey <span class="text-secondary">Today</span>
                </h2>

                <p class="mt-4 text-gray-600 ">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Quidem modi reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita aperiam
                    mollitia iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.
                </p>

                <div class="inline-flex w-full mt-6 sm:w-auto">
                    <a href="#" class="inline-flex items-center justify-center w-full px-6 py-2  md:text-sm text-white duration-300 bg-primary rounded-lg hover:bg-primary-900 focus:ring ">
                        Get Started </a>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('/assets/images/about.jpg') }}" alt="STUDYINFO Campus"
                        class="rounded-xl shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-extrabold text-gray-800 mb-6">About STUDYINFO</h2>
                    <p class="text-gray-600 mb-6">Established with a vision to empower students through quality
                        education, STUDYINFO offers programs in Nursing, ICT, and various technical disciplines. Our
                        mission is to bridge the skills gap in today's workforce by providing innovative, practical, and
                        industry-aligned training.</p>
                    <p class="text-gray-600 mb-6">At STUDYINFO, our teaching approach combines theoretical instruction
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






    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center md:text-left items-start">
                <h2 class="text-4xl font-extrabold text-primary">Our Mission
                </h2>
                <p class="text-lg text-accent-900 max-w-5xl">To be a leading center of excellence in
                    education,
                    recognized for producing globally competent and socially responsible professionals who shape the
                    future of healthcare, technology, and technical fields.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-10">
                <div class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 shadow-xl hover:shadow-2xl ">

                    <h3 class="text-xl font-bold text-gray-800 mb-4">Our Commitment</h3>
                    <p class="text-gray-600">At STUDYINFO, we are deeply committed to transforming education by providing
                        practical, industry-aligned training that equips students with the skills and knowledge needed
                        to excel in healthcare, technology, and technical fields.</p>
                </div>

                <div class="bg-white rounded-2xl p-5 md:p-10 transition duration-300 shadow-xl hover:shadow-2xl">

                    <h3 class="text-xl font-bold text-gray-800 mb-4">The Impact</h3>
                    <p class="text-gray-600">Through strategic partnerships, community initiatives, and hands-on
                        training, STUDYINFO creates meaningful opportunities for students to develop career-critical
                        skills and make significant contributions to society.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 pt-5">
                <div class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 shadow-xl hover:shadow-2xl">

                    <h3 class="text-xl font-bold text-gray-800 mb-4">The Importance</h3>
                    <p class="text-gray-600">STUDYINFO recognizes education as a powerful tool for individual and
                        community transformation, focusing on developing professionals who can address real-world
                        challenges with expertise and social responsibility.</p>
                </div>
                <div class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 shadow-xl hover:shadow-2xl">

                    <h3 class="text-xl font-bold text-gray-800 mb-4">Our Resolve</h3>
                    <p class="text-gray-600">We are dedicated to bridging the skills gap by delivering innovative,
                        practical, and transformative education that empowers students to become leaders,
                        problem-solvers, and change-makers in their respective industries.</p>
                </div>
                <div class="bg-white rounded-3xl p-5 md:p-10 transition duration-300 shadow-xl hover:shadow-2xl">

                    <h3 class="text-xl font-bold text-gray-800 mb-4">Our Vision</h3>
                    <p class="text-gray-600"> To empower individuals with knowledge, skills, and practical experience
                        through innovative education in Nursing, ICT, and technical disciplines, fostering a generation
                        of professionals who drive change and make a positive impact in their communities.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Recognition Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-left mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Recognition for Excellence</h2>
                <p class="text-md text-gray-600 ">STUDYINFO has been recognized as a leading institution
                    in Nursing, ICT, and technical courses, earning accolades from local education boards and industry
                    organizations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white rounded-xl p-8 text-center transition duration-300 hover:scale-105 hover:shadow-lg">
                    <div class="text-4xl text-secondary mb-4">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-5 text-2xl">Nursing Excellence</h3>
                    <p class="text-md text-gray-600">Valerie Cherunya graduated and secured a position at a leading
                        European hospital, winning the "Rising Star in Healthcare" award.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-8 text-center transition duration-300 hover:scale-105 hover:shadow-lg">
                    <div class="text-4xl text-green-600 mb-4">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-5 text-2xl">ICT Innovation</h3>
                    <p class="text-md text-gray-600">Edwin developed a mobile app simplifying government services,
                        gaining national recognition at the Kenya Tech Summit.</p>
                </div>

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
    <section class="py-20 bg-blue-50 text-blue-950 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-extrabold mb-2">Your Journey Starts With Purpose.</h2>
            <h5 class="text-xl md:text-2xl font-semibold text-primary-600 mb-6">
                Your Future Starts With STUDYINFO.
            </h5>
            <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">Take the first step towards a rewarding career with
                STUDYINFO's industry-focused programs</p>
            <button
                class="bg-blue-950 hover:bg-blue-900 text-primary-50 font-medium py-3 px-8 rounded-full transition duration-300 text-lg">
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